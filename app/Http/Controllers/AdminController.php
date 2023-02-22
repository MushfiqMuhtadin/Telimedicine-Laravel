<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Healthpackages;
use App\Models\Payment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view ('Admin.Admin');
    }

    public function CreatepackageView(){
        return view(
            'Admin.createpackage'
        );
    }


    public function CreatepackagePost(Request $request){

        $request->validate([

            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $package = new Healthpackages();
        $package->name = $request->name;
        $package->type = $request->type;
        $package->description = $request->description;
        $package->price = $request->price;

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploaded_images'), $filename);
            $package->picture = $filename;
        }

        $result = $package->save();

        if ($result) {
            return redirect()->route('login')->with('success', 'success');
        } else {
            return redirect()->route('login')->with('fail', 'Something Wrong try again');
        }
    }


    public function ViewpackageGet(){
        $package = Healthpackages::all();
        return view('Admin.packagelist',[
            'package'=>$package
        ]);
    }
    public function EditpackageGet(Request $request, $id){
        $package = Healthpackages::findOrFail($id);
        return view('Admin.editpackage',[
            'package'=>$package
        ]);
    }


    public function Updatepackage(Request $request, $id){

        $package = Healthpackages::find($id);
        $package->name = $request->input('packagename');
        $package->price = $request->input('price');
        $package->type = $request->input('type');
        $package->description = $request->input('description');
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploaded_images'), $filename);
            $package->picture = $filename;
        }
        $package->save();
        
        return redirect()->route('admin/dashboard')->with('success', 'Package updated successfully');
    }

    public function Deletepackage($id)
    {
        
        $package = Healthpackages::find($id);
        $package->delete();

        return redirect()->route('admin/dashboard')->with('success', 'appointment Deleted successfully');
    }

    public function earninghistory()
    {
        $payment = Payment::all();

        return view(
            'Admin.earninghistory',
            [
                'payment' => $payment,
                
            ]
        );
    }

    public function showpatient()
    {
        $patient = Patient::all();

        return view(
            'Admin.Viewpatients',
            [
                'patient' => $patient,
                
            ]
        );
    }
    public function showdoctor()
    {
        $doctor = Doctor::all();

        return view(
            'Admin.Viewdoctors',
            [
                'doctor' => $doctor,
                
            ]
        );
    }
    public function showappointment()
    {
        $appointment = Appointment::all();

        return view(
            'Admin.ViewAppointments',
            [
                'appointment' => $appointment,
                
            ]
        );
    }
}
