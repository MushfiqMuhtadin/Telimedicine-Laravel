<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .imgmama {
            width: 40%;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>

<body style="background-color: rgb(227, 251, 235)">
    <br>
    <center>
        <h1 class="text-primary">My prescriptions</h1>
    </center>
    <br>
    <div class="table-responsive">

        <table class="table  table-bordered table-hover">
            <thead class="table-primary">
                <tr class="text-dark">

                    <th>patient</th>
                    <th>Doctor name</th>
                    <th>Appointment Id</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

                <tr class="text-dark ">
                    @foreach ($prescription as $prescription)
                        <td><img src="{{ asset('uploaded_images/' . $prescription->patientpicture) }}"
                                class="imgmama bg-image hover-zoom " alt="Doctor Image"></td>
                        <td>{{ $prescription->doctorname }}</td>
                        <td>{{ $prescription->appointmentid }}</td>
                        <td> <a href="{{ route('prescriptions.download', $prescription->id) }}" class="btn btn-primary">
                                Download
                            </a></td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
