<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Patient Dashboard</title>
    <style>
        .bg-medium-blue {
            background-color: #1c2331;
        }

        .imgmama {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
         a{
            text-decoration: none;
        }
    </style>
</head>

<body  style="background-color: rgba(185, 230, 248, 0.431)" >

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-medium-blue">
        <a class="navbar-brand text-white" href="#">Patient Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('appointment.history/' . $patientid) }}">Appointment History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('payment.history/' . $patientid) }}">Payment History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('patient/dashboard/profile/' . $patientid) }}">Profile</a>
                </li>
            </ul>
            <h3 class="text-white"><a href="{{route('logout')}}">LOGOUT</a></h3>
        </div>
    </nav>

    <center>
        @if (Session::has('success'))
            <h4 class="alert alert-success">{{ Session::get('success') }}</h4>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-dark">{{ Session::get('fail') }}</div>
        @endif
    </center>

    <section class="container my-5 ">
        <h1 class="text-center">Make Your Appointment</h1> <br>
        <div class="row">
            @foreach ($doctors as $index => $doctor)
                @php
                    $fullName = $doctor->firstname . ' ' . $doctor->lastname;
                @endphp
                <div class="col-12 col-lg-4  ">
                    <div class="card mb-5 mx-2 shadow-lg p-3 mb-5 bg-white rounded">
                        <img src="{{ asset('uploaded_images/' . $doctor->picture) }}"
                            class="imgmama bg-image hover-zoom " alt="Doctor Image">
                        <div class="card-body">
                            <h4 class="card-title text-primary">{{ $doctor['specialization'] }}</h4>
                            <h5 class="card-title card-text">Dr. {{ $fullName }}</h5>

                            <h6 class="card-text">Qualification: {{ $doctor['qualification'] }}</h6>
                            <h6 class="card-text">Address: {{ $doctor['address'] }}</h6>
                            <h6 class="card-text">Phone: {{ $doctor['phone'] }}</h6>
                            <button class=" btn btn-primary">
                            <a style="text-decoration: none" class="text-white" href="{{ url('appointments/' . $doctor->id) }}">Make Appointment</a>
                            </button>
                        </div>
                    </div>
                </div>
                @if (($index + 1) % 3 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
        <br>

    </section>

    <section class="mx-5">
         <h1 class="text-center">Care Packages</h1> <br>
          <div class="row">
            @foreach ($package as $index => $package)
               
                <div class="col-12 col-lg-4 d-flex justify-content-center ">
                    <div style="background-color: #eaf5fa6a; width:70% " class="card mb-5 mx-2 shadow-lg p-3 mb-5  rounded">
                        <img src="{{ asset('uploaded_images/' . $package->picture) }}"
                            class="imgmama bg-image hover-zoom " alt="Doctor Image">
                        <div class="card-body">
                            <h4 class="card-title text-primary">{{ $package['name'] }}</h4>
                            <h5 class="card-title card-text text-dark ">Type: <span class="text-success">{{ $package['type']}}</span></h5>

                            <h6 class="card-text text-success ">Description: <span class="text-primary" > {{ $package['description'] }}</span> </h6>
                            <h6 class="card-text  text-success fs-5">Price: <span class="fs-4" >{{ $package['price'] }}</span>$ </h6>
    
                            <div class="d-flex justify-content-start">
                                <button  class="btn btn-primary btn-sm mt-2"> <a class="mx-3 text-white fs-5" href="{{ url('checkout/' . $package->id) }}">Buy</a></button>

                            </div>
                          
                        </div>
                    </div>
                </div>
                @if (($index + 1) % 3 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </section>

    <!--Footer-->
    <footer class="bg-light py-3">
        <div class="container">
            <p class="text-center">&copy; 2023 Patient Landing Page</p>
        </div>
    </footer>

</body>

</html>
