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
            <thead class="table-dark">
                <tr>
                    <th >Order ID</th>
                    <th >Patient ID</th>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Package</th>
                    <th >Phone</th>
                    <th >address</th>
                    <th >cardname</th>
                    <th >cardnumber</th>
                    <th >Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payment as $payment)
                    <tr>
                        <td >{{ $payment->id }}</td>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $payment->name }}</td>
                        <td>{{ $payment->email }}</td>
                        <td>{{ $payment->packagename }}</td>
                        <td>{{ $payment->phone }}</td>
                        <td>{{ $payment->address }}</td>
                        <td>{{ $payment->cardname }}</td>
                        <td>{{ $payment->cardnumber }}</td>
                        <td class="table-active">{{ $payment->price }} $</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
