<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
<!--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- favicon -->
    <!-- estilos -->
    <style>
        .active{
            color: blue;
            font-weight: bold;

        }
    </style>

</head>

<body>
    <!-- header --> @include('layouts.partials.header')
    <!-- nav -->
   

   @yield('content')


    <!-- footer -->@include('layouts.partials.footer')
    <!-- script -->
</body>


</html>