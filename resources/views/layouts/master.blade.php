<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script src="{{ asset('js/app.js') }}" defer></script>
   </head>
   <body class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">SweeftLibrary</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/addbook">Add book</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Authors</a>
                  </li>
               </ul>
               <form class="d-flex" action="{{ route('search') }}" method="GET">
                  <input class="form-control me-2" type="search" name="search" placeholder="Book or author" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
            </div>
         </div>
      </nav>
      @yield('content')
   </body>
</html>
