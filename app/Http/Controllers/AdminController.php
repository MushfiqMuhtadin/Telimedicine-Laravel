<?php

namespace App\Http\Controllers;

use App\Models\Healthpackages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
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
        
        return redirect()->route('ViewpackageGet')->with('success', 'Package updated successfully');
    }

    public function Deletepackage($id)
    {
        
        $package = Healthpackages::find($id);
        $package->delete();

        return redirect()->route('doctor.dashboard')->with('success', 'appointment Deleted successfully');
    }
}
