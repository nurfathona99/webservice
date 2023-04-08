<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'WEBService 23')</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-10">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Web Service</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('course')}}">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('institutions.index') }}">Institutions</a>
              </li>
      </nav>

    <div class="container">


        @yield('isi')


    </div>

</body>
</html>
