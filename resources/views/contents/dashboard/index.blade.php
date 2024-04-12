@extends('layouts.app')

@section('title', 'TItle of Page / Name of Project')

@section('contents')

    <div class="container mt-5">
        <div class="dtrcard p-3 card shadow">
            <h3 style="color: #27af59">
                Daily Time Record

                {{-- ===== Back Button ===== --}}
                {{-- <a class="h4" href="{{ route('dashboard') }}" style="float:right;">
                    <i class="far fa-arrow-alt-circle-left"></i>
                        <span style="font-family: 'Poppins', serif;"> Back </span>
                </a> --}}

            </h3>

            <hr class="m-0 mb-3" style="color: gray">

            {{--==============Clock-and-date================--}}
            <div class="datetime m-3" onload="initClock">
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
                    &nbsp;
                    <span id="period">{{ now()->format('A')}}</span>
                </div>
            </div>
            {{-- ====================================== --}}


             <div class="dropdown d-flex justify-content-center mb-3">
                <select class="form-select form-select-lg w-50" aria-label=".form-select-lg example" id="selectAction">
                    <option value="1">Time in</option>
                    <option value="2">Time out</option>
                    <option value="3">Lunch in</option>
                    <option value="4">Lunch out</option> 
                </select>
            </div> 

            {{-- ======================Profile======================== --}}
            <div class="profile-row row" style="width: 50%">
                <div class="col-6">
                    <img src="css/logo/Defaultpic.png" class="img-fluid"alt="Default Profile Pic">
                </div>
                
                <div class="col-6">
                    <div class="input-group m-2" style="width: 94%">
                        <span class="input-group-text">#</span>
                        <div class="form-floating">
                            <textarea type="email" class="form-control" id="employeeId" style="resize: none; placeholder="name@example.com" disabled>{{ auth()->user()->id }}</textarea>
                            <label for="employeeId">Employee ID</label>
                        </div>
                    </div>

                    <div class="form-floating m-2">
                        <textarea class="form-control" placeholder="Leave a comment here" style="resize: none; id="employeeName" disabled>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</textarea>
                        <label for="employeeName">Employee Name:</label>
                    </div> 
                </div>
            </div>
            {{-- ================================================== --}}
            
            <div class="container">
                <form action="{{ route('dashboard') }}" method="POST" id="dtrForm">
                    @csrf
                    <input type="hidden" name="action" id="selectedAction" value="">
                    <div class="dropdown d-flex justify-content-center mb-3">
                        <button style="width: 50%" class="btn btn-success mb-3 mt-3" id="submitButton">Submit</button>
                    </div>
                </form>
            </div>

            {{-- Sweet Alert Script  --}}
            <script>
                document.getElementById('submitButton').addEventListener('click', function(event) {
                    event.preventDefault();
        
                    const selectedAction = document.getElementById('selectAction').value;
        
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success btn-lg",
                            cancelButton: "btn btn-danger btn-lg"
                        },
                        buttonsStyling: false
                    });
        
                    swalWithBootstrapButtons.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "question",
                        showCancelButton: true,
                        cancelButtonText: "No",
                        confirmButtonText: "Yes",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Set the selected action to the hidden input
                            document.getElementById('selectedAction').value = selectedAction;
                            // Submit the form
                            document.getElementById('dtrForm').submit();
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            swalWithBootstrapButtons.fire({
                                title: "Cancelled",
                                icon: "error"
                            });
                        }
                    });
                });
            </script>
            {{-- {{-- End Sweet Alert Script --}}

            {{-- <script>
                document.getElementById('selectAction').addEventListener('change', function() {
                    var selectedOption = this.value;
                    var actionText = '';
                    switch (selectedOption) {
                        case '1':
                            actionText = 'Time in';
                            break;
                        case '2':
                            actionText = 'Time out';
                            break;
                        case '3':
                            actionText = 'Lunch in';
                            break;
                        case '4':
                            actionText = 'Lunch out';
                            break;
                        default:
                            actionText = '';
                    }
                    document.getElementById('submitButton').value = actionText;
                    document.getElementById('selectedAction').value = selectedOption;
                });
            </script> --}}
         
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
