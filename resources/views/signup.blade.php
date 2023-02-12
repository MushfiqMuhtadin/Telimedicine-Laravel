<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: "Montserrat", sans-serif;
        background-color: #f5f5f5;
        height: 100vh;
      }
      h1 {
        font-weight: 600;
        letter-spacing: 2px;
        margin-bottom: 50px;
      }
      .register-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 450px;
        text-align: center;
        margin: 100px auto;
      }
      .register-option {
        background-color: #0079b9;
        color: #fff;
        border-radius: 10px;
        width: 100%;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        font-weight: 500;
        letter-spacing: 2px;
        margin-bottom: 20px;
      }
      .register-option:hover {
        background-color: #005b87;
      }
    </style>
    <title>Register</title>
  </head>
  <body>
    <div class="container h-100 d-flex justify-content-center align-items-center">
      <div class="register-card">
        <h1 class="text-center">Welcome to <span class="text-primary">Medic care</span></h1>
        
        <p>Please choose the type of registration you would like to proceed with:</p>
        <a href="{{route('Patient-registration')}}" class="btn btn-primary register-option mt-3">
          Register as Patient
        </a>
        <a href="{{route('Doctor-registration')}}" class="btn btn-primary register-option mt-3">
          Register as Doctor
        </a>
      </div>
    </div>
  </body>
</html>
