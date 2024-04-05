@extends('layouts.app')

@section('title', 'TItle of Page / Name of Project')

@section('contents')

    <div class="container mt-5">
        <div class="dtrcard p-3 card shadow">
            <h3 class="text-green">
                Daily Time Record 
                {{-- <a class="h4" href="{{ route('dashboard') }}" style="float:right;">
                    <i class="far fa-arrow-alt-circle-left"></i> 
                        <span style="font-family: 'Poppins', serif;"> Back </span>
                </a> --}}
            </h3>

            <hr class="m-0 mb-3">
           
            {{-- Clock-and-date --}}
            <div class="clock-date-con container mt-3 mb-3">
                <h1 id="current-time"></h1>            
            </div>

            <script> 
                let time = document.getElementById("current-time");
                setInterval(() => {
                    let d = new Date();
                    time.innerHTML = d.toLocaleTimeString()
                },1000)
            </script>
            {{-- ------------------- --}}

            <div class="dtrform">
                <div class="form-floating mb-3 opacity-75 w-50">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Employee ID</label>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@section('scripts')
@endsection
