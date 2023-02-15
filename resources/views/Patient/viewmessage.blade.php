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

<body>
    <div class="table-responsive">

        <table class="table  table-bordered table-hover">
            <thead class="table-primary">
                <tr class="text-dark">

                    <th>Doctor</th>
                    <th>Doctor name</th>
                    <th class="">Appointment Id</th>
                    <th>Google meet link</th>

                </tr>
            </thead>
            <tbody>

                <tr class="text-dark ">
                    @foreach ($patientmsg as $patientmsg)
                        <td><img src="{{ asset('uploaded_images/' . $patientmsg->doctorpicture) }}"
                                class="imgmama bg-image hover-zoom " alt="Doctor Image"></td>
                        <td>{{ $patientmsg->doctorname }}</td>
                        <td>{{ $patientmsg->appointmentid }}</td>
                        <td>{{ $patientmsg->message }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
