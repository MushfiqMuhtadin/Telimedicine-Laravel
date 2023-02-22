<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
   
    
        <center>
            <h1 class="text-primary">Make an Appointment</h1>
        </center>
        <br>
  <form action="{{ route('appointment-created') }}" method="post">
    @csrf

     <div class="form-group">
      <label class="mt-3 fs-5 fw-semibold text-primary" for="appointmentdate">Appointment Date</label>
      <input type="date" class="form-control" id="appointmentdate" name="appointmentdate" required>
    </div>

    
  
      <input type="hidden" class="form-control" id="doctorid" name="doctorid" value="{{ $doctor->id }}" readonly>

    
    <div class="form-group">
      <label class="mt-3 fs-5 fw-semibold text-primary" for="doctorname">Doctor NAME</label>
      <input type="text" class="form-control" id="doctorname" name="doctorname" value="{{ $doctor->firstname}}" readonly>
    </div>

    <div class="form-group">
      <label class="mt-3 fs-5 fw-semibold text-primary" for="specialization">SPECIALIZATION</label>
      <input type="text" class="form-control" id="specialization" name="specialization" value="{{ $doctor->specialization}}"readonly>
    </div>

 
           <input type="hidden" class="form-control" id="patientid" name="patientid" value="{{ $patient->id }}" readonly>
     

    <div class="form-group">
      <label class="mt-3 fs-5 fw-semibold text-primary" for="patientname">Patient NAME</label>
           <input type="text" class="form-control" id="patientname" name="patientname" 
           value="{{$patient->firstname}}" readonly>
     </div>


           <input type="hidden" class="form-control" id="patientaddress" name="patientaddress" 
           value="{{ $patient->address }}" readonly>
  

    <div class="form-group">
      <label class="mt-3 fs-5 fw-semibold text-primary" for="patientphone">Patient Phone</label>
           <input type="text" class="form-control" id="patientphone" name="patientphone" 
           value="{{$patient->phone}}" readonly>
     </div>


           <input type="hidden" class="form-control" id="patientgender" name="patientgender"
            value="{{$patient->gender}}" readonly>
     

  
           <input type="hidden" class="form-control" id="patientpicture" name="patientpicture"
            value="{{$patient->picture}}" readonly>
     

   <br>
    <button type="submit" class="btn btn-primary">Make appointment</button>
  </form>
</div>

</body>
</html>