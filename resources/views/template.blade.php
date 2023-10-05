<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<body>

    <div class="container px-4 mx-auto">
        <header class="flex justify-between intems-center py-4">
            <div class="flex items-center flex grow gap-4">
                <a href="{{ route('home') }}"></a>
                <img src="{{asset('imagenes/logo.png')}}" class="h-12 ">
                <form action="">
                    <input type="text" placeholder="buscar">
                </form>
            </div>

            @auth
            <a href="{{ route('dashboard')}}">Dashboard</a>
            <a href="{{ route('posts')}}">posts</a>
            @else
            <a href="{{ route('login')}}">Login</a>
            @endauth

        </header>

        @yield('content')

    </div>



</body>

</html>