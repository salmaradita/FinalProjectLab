@section('navbar')
<head>
  
  <title>@yield('Navbar')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>
<style>
  a.navbar{
    margin-left: 8em;
    text-decoration: underline;
  }
  form.d-flex{
    margin-right: 8em;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar" href="/cover"><h4>MAIBOUTIQUE</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/register" class="btn btn-link" role="button" aria-pressed="true"><h4>Login</h4></a>
    </div>
  </div>
</nav>
</body>
</html>

