<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\MedicRecord;
use App\Models\Patien;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function registration(){
        $doctors = Doctor::all();
        $patient = Patien::where('user_id',Auth::user()->id)->first();
        return view('registration',compact('doctors','patient'));
    }
    public function storeRegistration(Request $request){
        try {
            Registration::create($request->all());
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
    public function medicRecord(){
        $patient = Patien::where('user_id',Auth::user()->id)->first();
        $medicRecords = MedicRecord::where('patien_id',$patient->id)->get();
        return view('medic-record',compact('medicRecords'));
    }
}
