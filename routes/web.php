<?php

use App\Models\Message;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;


// LOGIN REGISTRATION ROUTE START


//Homepage view
Route::get('/', [CustomAuthController::class, 'index'])->name('index');

//login interface view
Route::get('login', [CustomAuthController::class, 'login'])->name('login');

//Custom login authentication with validation
Route::post('login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

//logout function session flush
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

//Register as doctor and patient view
Route::get('registration', [CustomAuthController::class, 'registration'])->name('registration');

//doctor registration view
Route::get('Doctor-registration', [CustomAuthController::class, 'DoctorReg'])->name('Doctor-registration');

//patient registration view
Route::get('Patient-registration', [CustomAuthController::class, 'PatientReg'])->name('Patient-registration');

//doctor registration submit
Route::post('Doctor-reg-post', [CustomAuthController::class, 'DoctorRegPost'])->name('Doctor-reg-post');

//patient registration submit
Route::post('Patient-reg-post', [CustomAuthController::class, 'PatientRegPost'])->name('Patient-reg-post'); 


//LOGIN REGISTRATION ROUTE END




//PATIENT ROUTE START

//patient dashboard view
Route::get('patient/dashboard', [PatientController::class, 'PatientDashboard'])->name('patient/dashboard');

//patient profile view with patientid passed through session
Route::get('patient/dashboard/profile/{id}', [PatientController::class, 'PatientProfile'])->name('patient.profile');

////patient edit profile view passed patient id
Route::get('/patient/dashboard/profile/{id}/edit',  [PatientController::class, 'PatientEditProfile'])->name('patient.edit');

//patient update profile submit
Route::put('/patient/dashboard/profile/{id}/update',  [PatientController::class, 'PatientUpdateProfile'])->name('patientprofile.update');

//patient checkout
Route::get('checkout/{id}', [PatientController::class, 'checkout'])->name('checkout');

//patient checkout post
Route::post('checkoutpost', [PatientController::class, 'checkoutpost'])->name('checkoutpost');


//payment history get
Route::get('payment.history/{id}', [PatientController::class, 'paymenthistory'])->name('payment.history');


//PATIENT ROUTE END


//APPOINTMENT ROUTE START

//appointment view passed doctor id 
Route::get('appointments/{id}', [AppointmentController::class, 'Appointment'])->name('appointments.create');

//appointment submit
Route::post('appointment-created', [AppointmentController::class, 'CreateAppointment'])->name('appointment-created');

//appointment history
Route::get('appointment.history/{id}', [AppointmentController::class, 'AppointmentHistory'])->name('appointment.history');


//APPOINTMENT ROUTE END


//ADMIN ROUTE START


//ADMIN ROUTE END

//createpackage view
Route::get('CreatepackageView', [AdminController::class, 'CreatepackageView'])->name('CreatepackageView');

//createpackage post
Route::post('CreatepackagePost', [AdminController::class, 'CreatepackagePost'])->name('CreatepackagePost');

//viewpackage post
Route::get('ViewpackageGet', [AdminController::class, 'ViewpackageGet'])->name('ViewpackageGet');

//Editpackage get
Route::get('EditpackageGet/{id}', [AdminController::class, 'EditpackageGet'])->name('EditpackageGet');

//UpdateID
Route::put('update.package/{id}', [AdminController::class, 'Updatepackage'])->name('update.package');

//Deleteid
Route::get('delete.package/{id}', [AdminController::class, 'Deletepackage'])->name('delete.package');





//DOCTOR ROUTE START


//for viewing doctor
Route::get('DoctorsList', [DoctorController::class, 'Doctorslist'])->name('DoctorsList');


//DOCTOR ROUTE END







