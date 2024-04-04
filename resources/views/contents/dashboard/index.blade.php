@extends('layouts.sidebar')
<head>
    <link href="{{ asset('..public/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <button class="vdtr btn btn-dark" type="submit">View DTR</button>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Select time event
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Time in</a></li>
          <li><a class="dropdown-item" href="#">Lunch out</a></li>
          <li><a class="dropdown-item" href="#">Lunch in</a></li>
          <li><a class="dropdown-item" href="#">Time out</a></li>
        </ul>
      </div>


<div class="cardcon container-xl mr-0 ml-0" style="width: 100vh">
    
        <div class="txtf mb-3">
            <label for="employeeid" class="empid">Employee ID:</label>
            <input type="text" class="form-control" id="employeeid" placeholder="Employee ID">
        </div>

        
        <button class="sub btn btn-success btn-lg" type="submit" style="width: 20%">Submit</button>
</div>


</body>