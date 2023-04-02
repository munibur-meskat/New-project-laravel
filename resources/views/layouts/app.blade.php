<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('header-css')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route("home") }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("about.page") }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("user.insert.form") }}">Add User</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>


      @yield('pagecontent')


      <footer class="py-3 text-center bg-dark">
        <h5 class="text-white">&copy; Copyright 2022 Laravel</h5>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    
    @yield('footer-js')
  </body>
</html>