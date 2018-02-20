<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/fontawesome-all.css') }}">

    <title>Document</title>
</head>
<body>
    @include('admin.template.partials.nav')

    @include('flash::message')
    @include('admin.template.partials.errors')
    
    <section>
        @yield('content')
    </section>

<script src="{{asset('plugins/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>