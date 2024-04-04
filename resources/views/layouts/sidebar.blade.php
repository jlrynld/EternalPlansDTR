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
    <nav class="sidebar shadow-md">
         <header>
             <div class="image-text">
                <span class="image">
                  <img class="logo p-2" src="css/logo/ETERNALLOGO.png" alt="logo">
               </span>

                 <div class="text header-text"></div>
                    <span class="mx-1 fs-5 name text-white poppins-regular text">Eternal Plans, Inc.</span>
                 </div>
             <i class='bx bx-chevron-right toggle align-items-center'></i>
         </header> 
         <hr class="a">

         <div class="menu-bar">
             <div class="menu">             
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a href="{{ asset('home') }}" class="text-decoration-none nav-link d-flex align-items-center">                      
                            <i class='bx bxs-home text-decoration-none text-white icon'></i>
                            <span class="text nav-text ">Dashboard</span>                
                    </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="text-decoration-none nav-link d-flex align-items-center">                      
                          <i class='bx bxs-user-circle text-decoration-none text-white icon'></i>
                          <span class="text nav-text ">Profile</span>                
                  </a>
              </li>
              

              <li class="nav-item ">
                <a href="#" class="text-decoration-none nav-link d-flex align-items-center">                      
                        <i class='bx bx-history text-decoration-none text-white icon'></i>
                        <span class="text nav-text ">History</span>                
                </a>
            </li>

            <li class="nav-item">
              <a href="{{ asset('sample') }}" class="text-decoration-none nav-link d-flex align-items-center">                      
                      <i class='bx bxs-cog text-decoration-none text-white icon'></i>
                      <span class="text nav-text ">Settings</span>                
              </a>
          </li>
   
          <li class="nav-item">
            <form id="logout-form" action="{{ route('sign-out') }}" method="POST" class="nav-item text-start d-flex align-items-center">
                @csrf
                <button type="submit" class="text-start text-decoration-none nav-link">
                    <i class='bx bxs-log-out text-white icon'></i>
                    <span class="text nav-text mb-5">Logout</span>
                </button>
            </form>
        </li>

                </ul>                           
              </div>           
         </div>

    </nav>


  </body>
<footer class="mt-5"> </footer>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="{{ asset('js/showPassword.js') }}"></script>
        <script src="{{ asset('js/validations.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        

