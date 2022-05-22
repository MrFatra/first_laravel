<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap');

    body {
        font-family: 'Plus Jakarta Sans';
        background-color: rgb(27, 27, 27);
        color: white !important;
    }

</style>


<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    <div class="container">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('partials.footer')

</body>

</html>
