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
            <div class="datetime" onload="initClock">
                <div class="date">
                    <span id="dayname">{{ now()->format('l')}}</span>,
                    <span id="month">{{ now()->format('M')}}</span>
                    <span id="daynum">{{ now()->format('d')}}</span>,
                    <span id="year">{{ now()->format('Y')}}</span>
                </div>

                <div class="time">
                    <span id="hour">{{ now()->format('h') }}</span>:
                    <span id="minutes">{{ now()->format('i')}}</span>:
                    <span id="seconds">{{ now()->format('s')}}</span>
                    <span id="period">{{ now()->format('A')}}</span>
                </div>
            </div>
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
    <script>
        setInterval(() => {
            getCurrentTime()
        },1000)
    </script>
@endsection
