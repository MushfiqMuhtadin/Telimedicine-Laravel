<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
th,tr{
    height: 70px;
    font-size: 22px;
}

</style>

<body>


    <div class="table-responsive">
        <table class="table  table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th >Appointment ID</th>
                    <th >Patient ID</th>
                    <th >Doctor name</th>
                    <th >Patient Name</th>
                    <th >Phone</th>
                    <th >Address</th>
                    <th >Gender</th>
                    <th >Category</th>
                    <th >Appointment date</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($appointment as $appointment)
                    <tr>
                        <td >{{ $appointment->id }}</td>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $appointment->doctorname }}</td>
                        <td>{{ $patient->firstname }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $appointment->specialization }}</td>
                       <td>{{ $appointment->appointmentdate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>

</body>
</html>