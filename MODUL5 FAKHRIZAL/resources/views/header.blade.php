<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>

<body>
<div class="container">
    <div class="text-center ">
        <a class="text-dark header-text px-4" href="{{ url('/') }}">HOME</a>
        <a class="text-dark header-text px-4" href="{{ url('/products') }}">PRODUCT</a>
        <a class="text-dark header-text px-4" href="{{ url('/order') }}">ORDER</a>
        <a class="text-dark header-text px-4" href="{{ url('/history') }}">HISTORY</a>
    </div>
</div>

@yield('content')

{{-- Bootstrap script --}}
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>

</html>