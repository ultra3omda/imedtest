<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <title> @yield('title', env('APP_NAME')) </title>

       </head>
    <body>
       @yield('content')

       <footer>

       <p>&copy; Copyright {{ date('Y') }} &middot; <a href='/about-us'> About Us <a></p>
       </footer>
    </body>

</html>
