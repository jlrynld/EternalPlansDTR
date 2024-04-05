@extends('layouts.app')

@section('title', 'TItle of Page / Name of Project')

@section('contents')

    <div class="container mt-5">
        <div class="dtrcard p-3 card shadow-lg ">
            <h3 style="color: #27af59">
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
         

            <div class="dropdown d-flex justify-content-center mb-3">
                <select class="form-select form-select-lg w-50" aria-label=".form-select-lg example">                   
                    <option value="1">Time in</option>
                    <option value="2">Time out</option>
                    <option value="3">Lunch in</option>
                    <option value="3">Lunch out</option>
                  </select>
              </div>

            <div class="d-flex justify-content-center mb-3">
                <div class="input-group m-2" style="width: 24%">
                    <span class="input-group-text">#</span>
                    <div class="form-floating">
                        <textarea type="email" class="form-control" id="floatingInput" placeholder="name@example.com" disabled>{{auth()->user()->id}} </textarea>
                        <label for="floatingInput">Employee ID</label>
                    </div>
                </div>    
                
                <div class="form-floating w-25 m-2" style="width: 24%">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled" disabled>{{auth()->user()->firstname }} {{ auth()->user()->lastname }}</textarea>
                    <label for="floatingTextarea2Disabled">Employee Name: </label>
                  </div>

            </div>
            
            <div class="dropdown d-flex justify-content-center mb-3">
                <input style="width: 50%" type="submit" value="Time in" class="btn btn-success mb-3 mt-3">
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
