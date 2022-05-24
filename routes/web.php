<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Homepage"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About ME",
        "nama" => "Ramadhan Fatra",
        "profesi" => "Backend Dev"
    ]);
});

Route::get('/blog', function () {
    $mydata = Post::all();

    return view('posts', [
        "title" => "My Blog Post",
        "data" => $mydata
    ]);
});

Route::get('blog/{slug}', function ($slug) {
    // $myData = [
    //     [
    //         "judul" => "Judul Post Pertama",
    //         "image" => "Ramadhan_Fatra_Binary_Boy_Poster.png",
    //         "author" => "Ramadhan Fatra",
    //         "slug" => "judul-post-pertama",
    //         "desc" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, corporis, magnam optio ipsam eius facilis veritatis ab non ullam, quisquam at! Velit iste eligendi magnam obcaecati. Voluptatem cum nobis, dolor officia laborum voluptate suscipit excepturi quia! Similique, quisquam. Mollitia magni eos odio ducimus corporis ea rem sapiente provident quis reprehenderit sint neque nihil veniam vel quisquam pariatur et accusamus at, in repellat dolores, quibusdam unde ipsum eius. Velit excepturi asperiores, iusto provident fugiat aspernatur? Saepe adipisci nulla, cupiditate nihil sint voluptate accusantium, ea facere esse id tempora dolorem quos ratione temporibus. Id similique inventore natus magnam doloribus nulla debitis ea!"
    //     ],
    //     [
    //         "judul" => "Judul Post Kedua",
    //         "image" => "Ramadhan_Fatra_Binary_Boy_Poster.png",
    //         "author" => "Ramadhan Fatra",
    //         "slug" => "judul-post-kedua",
    //         "desc" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum nobis rem molestiae facere, velit, deleniti nostrum libero ab amet doloremque officiis recusandae! Eos natus, corrupti libero, assumenda hic dicta voluptatum voluptate ipsa impedit ducimus repellendus ex minima facilis enim aliquam voluptas id at, error recusandae. Temporibus dicta asperiores minus eligendi quisquam doloribus eaque ipsum sapiente, in veritatis officia nesciunt quis repellat maxime distinctio provident quidem suscipit molestias vel exercitationem eveniet voluptatum, vero nam! Distinctio similique error natus in placeat quis."
    //     ]
    // ];

    // $post = [];
    // foreach ($myData as $key) {
    //     if ($key['slug'] === $slug) {
    //         $post = $key;
    //     }
    // }

    return view('post', [
        "title" => "View Post",
        "data" => Post::find($slug),
    ]);
});
