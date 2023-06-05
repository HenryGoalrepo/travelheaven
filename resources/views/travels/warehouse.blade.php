<!DOCTYPE html>
 <html lang="zxx">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
     <title>Travol Agency </title>
     @include('travels.links&scripts.stylesheet')
 </head>
 <body>
     <!-- Preloader Progress scroll totop Navbar -->
      @include('travels.sections.navs')
     <!-- Header -->
      @include('travels.sections.header')
     <!-- Content-->
      @yield('content')
     <!-- Footer -->
      @include('travels.sections.footer')
     <!-- Scripts -->
      @include('travels.links&scripts.scripts')
 </body>
 </html>
