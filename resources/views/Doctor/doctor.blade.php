<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doctor Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/DoctorAsset/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .imgmama {
            width: 100%;
            height: 70px;
            object-fit: cover;
        }
    </style>

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Medic Care</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#meeting">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Meeting</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#appointment">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Appointment</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#prescription">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Prescription</span></a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#patient">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Patient</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Logout</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav style="background-color: #4e4ef59f; color: rgb(61, 53, 53);"
                    class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="text-dark"> {{ $doctor->firstname }}</h5>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('uploaded_images/' . $doctor->picture) }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('doctor.profile', $doctor->id) }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <center>
                        @if (Session::has('success'))
                            <h4 class="alert alert-success">{{ Session::get('success') }}</h4>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-dark">{{ Session::get('fail') }}</div>
                        @endif
                    </center>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between">

                    </div>
                    <div class="mx-3">
                        <h3 class="mb-3">Welcome Doctor {{ $doctor->firstname }}</h3>
                    </div>
                    <!-- Content Row -->
                    <div class="row">


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                appointments</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $appointmentcount }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                patients</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $patientcount }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                Meetings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $meetingcount }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                Prescriptions</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $prescriptioncount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Content Row -->

                        <div class="row">

                            <!-- Appointment -->
                            <div class="col-xl-9 col-lg-9" id="appointment">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h3 class="m-0 font-weight-bold text-primary">Appointment Requests</h3>

                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body" style="height: 380px; overflow: scroll;">
                                        <div class="chart-area ">
                                            <div class="table-responsive">
                                                @foreach ($appointment as $appointment)
                                                    <table class="table  table-bordered table-hover">
                                                        <thead class="table-primary">
                                                            <tr class="text-dark">
                                                                <th>Apt ID</th>
                                                                <th>Patient ID</th>
                                                                <th>Doctor</th>
                                                                <th>Patient Name</th>
                                                                <th>Phone</th>
                                                                <th>Gender</th>
                                                                <th>Category</th>
                                                                <th>date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="text-dark">
                                                                <td>{{ $appointment->id }}</td>
                                                                <td>{{ $appointment->patientid }}</td>
                                                                <td>{{ $appointment->doctorname }}</td>
                                                                <td>{{ $appointment->patientname }}</td>
                                                                <td>{{ $appointment->patientphone }}</td>
                                                                <td>{{ $appointment->patientgender }}</td>
                                                                <td>{{ $appointment->specialization }}</td>
                                                                <td>{{ $appointment->appointmentdate }}</td>
                                                                <td>{{ $appointment->appointmentstatus == 0 ? 'Pending' : 'Approved' }}
                                                                </td>
                                                                <td class="d-flex p-4  ">
                                                                    @if ($appointment->appointmentstatus == 0)
                                                                        <a href="{{ route('appointments.approve', $appointment->id) }}"
                                                                            class="btn btn-success btn-sm mx-2">Approve</a>
                                                                    @else
                                                                        <button class="btn btn-primary btn-sm"
                                                                            disabled>Approved</button>
                                                                    @endif
                                                                    <a href="{{ route('appointments.delete', $appointment->id) }}"
                                                                        class="btn btn-danger btn-sm mx-2">Delete</a>
                                                                </td>
                                                @endforeach
                                                </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- patients list --}}
                            <div class="col-xl-3 col-lg-3" id="patient">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h3 class="m-0 font-weight-bold text-primary">Admitted Patients List</h3>

                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <div class="card-body" style="height: 350px; overflow: scroll;">
                                                <div class="chart-area ">
                                                    <div class="table-responsive">
                                                        @foreach ($patientlist as $patientlist)
                                                            <table class="table  table-bordered table-hover">
                                                                <thead class="table-primary">
                                                                    <tr class="text-dark">

                                                                        <th>Apt Id</th>
                                                                        <th>Patient Name</th>
                                                                        <th>Picture</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="text-dark">
                                                                        <td>{{ $patientlist->id }}</td>
                                                                        <td>{{ $patientlist->patientname }}</td>
                                                                        <td><img src="{{ asset('uploaded_images/' . $patientlist->patientpicture) }}"
                                                                                class="imgmama bg-image hover-zoom "
                                                                                alt="Doctor Image">
                                                                        </td>

                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Send meeting link --}}

                            <div class="col-xl-7 col-lg-5" id="meeting">
                                <div class="card shadow mb-4">

                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h3 class="m-0 font-weight-bold text-primary">Send Meeting Link</h3>

                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body"style="height: 350px; overflow: scroll;">
                                        <div class="chart-area">
                                            <div class="table-responsive">
                                                @foreach ($sendlink as $sendlink)
                                                    <table class="table  table-bordered table-hover">
                                                        <thead class="table-primary">
                                                            <tr class="text-dark">
                                                                <th>Apt Id</th>
                                                                <th>Patient Name</th>
                                                                <th>PID</th>
                                                                <th>Picture</th>
                                                                <th>Status</th>
                                                                <th>Meeting Link</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="text-dark">
                                                                <td>{{ $sendlink->id }}</td>
                                                                <td>{{ $sendlink->patientname }}</td>
                                                                <td>{{ $sendlink->patientid }}</td>
                                                                <td><img src="{{ asset('uploaded_images/' . $sendlink->patientpicture) }}"
                                                                        class="imgmama bg-image hover-zoom "
                                                                        alt="Doctor Image">
                                                                </td>
                                                                <td>{{ $sendlink->appointmentstatus == 0 ? 'Pending' : 'Approved' }}
                                                                </td>
                                                                <td>
                                                                    @if ($sendlink->appointmentstatus === 1)
                                                                        <form
                                                                            action="{{ route('appointments.sendmessage') }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <input type="hidden" id="appointmentid"
                                                                                name="appointmentid"
                                                                                value="{{ $sendlink->id }}">

                                                                            <input class="mb-2 form-control input-lg"
                                                                                type="text" name="message"
                                                                                id="message"
                                                                                placeholder="Paste meeting Link here">
                                                                            <button class="btn btn-primary btn-s"
                                                                                type="submit">Send Link</button>
                                                                        </form>
                                                                    @endif
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- send prescription --}}
                            <div class="col-xl-5 col-lg-5" id="prescription">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h3 class="m-0 font-weight-bold text-primary">Prescribe Patients</h3>

                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body"style="height: 350px; overflow: scroll;">
                                        <div class="chart-area">
                                            <div class="table-responsive">
                                                @foreach ($prescription as $prescription)
                                                    <table class="table  table-bordered table-hover">
                                                        <thead class="table-primary">
                                                            <tr class="text-dark">
                                                                <th>Apt Id</th>
                                                                <th>Patient Name</th>
                                                                <th>PID</th>
                                                                <th>Picture</th>
                                                                <th>Status</th>
                                                                <th>Prescribe patient</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="text-dark">
                                                                <td>{{ $prescription->id }}</td>
                                                                <td>{{ $prescription->patientname }}</td>
                                                                <td>{{ $prescription->patientid }}</td>
                                                                <td><img src="{{ asset('uploaded_images/' . $prescription->patientpicture) }}"
                                                                        class="imgmama bg-image hover-zoom "
                                                                        alt="Doctor Image">
                                                                </td>
                                                                <td>{{ $prescription->appointmentstatus == 0 ? 'Pending' : 'Approved' }}
                                                                </td>
                                                                <td
                                                                    class="d-flex justify-content-center align-items-center p-4">
                                                                    @if ($prescription->appointmentstatus === 1)
                                                                        <a href="{{ route('prescription.appointment', $prescription->id) }}"
                                                                            class="btn btn-success  mx-2">Prescribe</a>
                                                                    @endif
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->



                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>



        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('assets/DoctorAsset/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/DoctorAsset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('assets/DoctorAsset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('assets/DoctorAsset/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('assets/DoctorAsset/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('assets/DoctorAsset/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/DoctorAsset/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
