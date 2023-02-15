<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Message;
use Illuminate\Http\Request;



class DoctorController extends Controller
{

        public function dashboard ($Did)
        {
                $doctor = Doctor::find($Did);
                $appointment = Appointment::where('doctorid', $Did)->get();
                $patientlist = Appointment::where('doctorid', $Did)->get();
                $sendlink = Appointment::where('appointmentstatus', 1)->get();
                return view('Doctor.doctor', [
                        'doctor' => $doctor,
                        'appointment'=>$appointment,
                        'patientlist'=>$patientlist,
                        'sendlink'=>$sendlink
                ]);
        }

        public function DoctorsList()
        {
                $doctors = Doctor::all();
                return view('showdoctors')->with('doctors', $doctors);
        }

        public function approve($id)
        {
                $appointment = Appointment::find($id);

                if ($appointment) {
                        $appointment->update([
                                'appointmentstatus' => 1,
                        ]);

                        return redirect()->back()->with('success', 'Appointment approved successfully!');
                }

                return redirect()->back()->with('error', 'Appointment not found');
        }


        public function delete(Request $request , $id)
        {
                $Did = $request->session()->get('doctor_id');
                $appointment = Appointment::find($id);
                $appointment->delete();

                return redirect('doctor/dashboard/' . $Did)->with('success', 'Appointment Deleted successfully');
        }

        public function sendmessage(Request $request)
        {
                $appointment = Appointment::where('id','=',$request->appointmentid)->first();
                $Did = $request->session()->get('doctor_id');
                $doctor=Doctor::find($Did);

                if (!$appointment) {
                        return redirect()->back()->with('error', 'Appointment not found');
                }

                if ($appointment->appointmentstatus === 1) {
                        $message = new Message();
                        $message->appointmentid = $appointment->id;
                        $message->doctorid = $appointment->doctorid;
                        $message->doctorname = $appointment->doctorname;
                        $message->patientid = $appointment->patientid;
                        $message->patientname = $appointment->patientname;
                        $message->doctorpicture = $doctor->picture;
                        $message->message = $request->message;
                        $result = $message->save();
                        if ($result) {
                                return redirect('doctor/dashboard/'.$Did)->with('success', 'Message sent successfully');
                        }    

                } else {
                        return redirect()->back()->with('fail', 'Cannot send message for pending appointment');
                }   
               
        }


}
