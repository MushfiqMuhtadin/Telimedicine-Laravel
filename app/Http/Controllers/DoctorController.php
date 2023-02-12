<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;



class DoctorController extends Controller
{
      
public function DoctorsList()
{
        $doctors = Doctor::all();
        return view('showdoctors')->with('doctors', $doctors);
}







}