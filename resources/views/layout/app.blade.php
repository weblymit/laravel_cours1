 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Laravel | @yield('title')</title>

     <!-- Fonts -->
     <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     @vite('resources/css/home.css')
 </head>

 <body>
     <div class="container py-12">
         @include("partials._navbar")
         @yield("content")
     </div>

 </body>

 </html>
