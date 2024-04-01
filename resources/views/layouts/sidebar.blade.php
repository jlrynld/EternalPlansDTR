<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTR</title>
     <!-- ====== CSS ====== -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
     <!-- ====== Bootstrap ====== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ====== Boxicons ====== -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- ====== Sidebar ====== -->

  <div class="p-4 text-white bg-dark sidebar">
    <a href="{{ asset('home') }}" class="d-flex text-white text-decoration-none">    
        <img class="mx-2 logo " src="css/logo/ETERNALLOGO.png" alt="index">
      <span class="fs-4">Eternal Plans, Inc.</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a href="{{ asset('home') }}" class="nav-link text-white" aria-current="page">
          <i class='bx bxs-home'></i>  
          Dashboard
        </a>
      </li>
             
      <li class="nav-item">
        <a href="{{ asset('sample') }}" class="nav-link text-white" aria-current="page">
          <i class='bx bxs-layer' ></i>
          Lorem Ipsum
        </a>
      </li>

    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <i class='bx bxs-user-circle bx-sm p-1'></i>
       <strong> {{ auth()->user()->firstname }} </strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <form action="{{ route('sign-out') }}" method="POST">
        <li><button class="dropdown-item" type="submit">Logout</button></li>
            @csrf
          </form>
        </li>    
      </ul>
    </div>
  </div>


  </body>
<footer class="mt-5"> </footer>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="{{ asset('js/showPassword.js') }}"></script>
        <script src="{{ asset('js/validations.js') }}"></script>

