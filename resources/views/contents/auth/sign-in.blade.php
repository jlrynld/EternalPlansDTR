@extends('layouts.auth')

@section('contents')
    <div class="container" style="max-width: 600px;">
        <div class="mt-5">
          <form action="{{ route ('sign-in') }} " method="POST">       
            @csrf
                <h3 class="mb-4 mx-auto text-center"> 
                      Login with your email and password
                 </h3>

             @if(session('success'))
                <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                </div>
             @elseif(session('error'))
                <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                </div>
            @endif

          

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="myemail@GMAIL.COM">
                    <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3" id="show_hide_password">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                <span id="showEye">
                    <i class='bx bxs-hide' id="eye" onclick="showPassword(pass, eye)"></i>
                </span>

            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" value="true">
            <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            </div>    
            <div class="text-center">
                  <input style="width: 100%" type="submit" value="Sign in" class="btn btn-success mb-3 mt-2">
            <div class="text-center">Don't have an account? <a href="{{ route('sign-up.index') }}">Sign-up now</a>
            </div>
            </form>
        </div>
     
@endsection
