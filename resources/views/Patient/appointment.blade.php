<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
   
  <h2 class="text-center mb-5">Make an Appointment</h2>
  <form action="{{ route('appointment-created') }}" method="post">
    @csrf

     <div class="form-group">
      <label for="appointmentdate">Appointment Date</label>
      <input type="date" class="form-control" id="appointmentdate" name="appointmentdate" required>
    </div>

    
    <div class="form-group">
      <label for="doctorid">Doctor ID</label>
      <input type="text" class="form-control" id="doctorid" name="doctorid" value="{{ $doctor->id }}" readonly>
    </div>
    
    <div class="form-group">
      <label for="doctorname">Doctor NAME</label>
      <input type="text" class="form-control" id="doctorname" name="doctorname" value="{{ $doctor->firstname}}" readonly>
    </div>

    <div class="form-group">
      <label for="specialization">SPECIALIZATION</label>
      <input type="text" class="form-control" id="specialization" name="specialization" value="{{ $doctor->specialization}}"readonly>
    </div>

    <div class="form-group">
      <label for="patientid">Patient ID</label>
           <input type="text" class="form-control" id="patientid" name="patientid" value="{{ $patient->id }}" readonly>
     </div>

    <div class="form-group">
      <label for="patientname">Patient NAME</label>
           <input type="text" class="form-control" id="patientname" name="patientname" 
           value="{{$patient->firstname}}" readonly>
     </div>

     <div class="form-group">
      <label for="patientaddress">Patient Address</label>
           <input type="text" class="form-control" id="patientaddress" name="patientaddress" 
           value="{{ $patient->address }}" readonly>
     </div>

    <div class="form-group">
      <label for="patientphone">Patient Phone</label>
           <input type="text" class="form-control" id="patientphone" name="patientphone" 
           value="{{$patient->phone}}" readonly>
     </div>

    <div class="form-group">
      <label for="patientgender">Patient Gender</label>
           <input type="text" class="form-control" id="patientgender" name="patientgender"
            value="{{$patient->gender}}" readonly>
     </div>

    <div class="form-group">
      <label for="patientpicture">Patient Picture</label>
           <input type="text" class="form-control" id="patientpicture" name="patientpicture"
            value="{{$patient->picture}}" readonly>
     </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>