<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelurahan X</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link href="/css/carousel.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

<main>

  <div class="container">
    <header>
      @include('navbar.index')
    </header>
  
    @yield('component')
  </div>

</main>
<!-- FOOTER -->
<footer class="container mt-auto">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2022 Pemerintah Kota Lubuklinggau &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
</body>
</html>
