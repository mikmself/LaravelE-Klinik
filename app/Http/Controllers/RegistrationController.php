<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        $registrations = Registration::with('patien')->get();
        return view('dashboard.registration.index',compact('registrations'));
    }
    public function create(){
        return view('dashboard.registration.create');
    }
    public function store(Request $request){
        try {
            Registration::create($request->all());
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
    public function destroy($id){
        try {
            $registration = Registration::find($id);
            if (!$registration) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $registration->delete();
            return back()->with('success','Data berhasil dihapus');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
}
