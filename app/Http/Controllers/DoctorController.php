<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::all();
        return view('dashboard.doctor.index',compact('doctors'));
    }
    public function create(){
        return view('dashboard.doctor.create');
    }
    public function store(Request $request){
        try {
            Doctor::create($request->all());
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
    public function edit($id){
        $doctor = Doctor::find($id);
        if (!$doctor) {
            return back()->with('error', 'Data tidak ditemukan');
        }
        return view('dashboard.doctor.edit',compact('doctor'));
    }
    public function update($id,Request $request){
        try {
            $doctor = Doctor::find($id);
            if (!$doctor) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $doctor->update($request->all());
            return back()->with('success', 'Data berhasil diubah');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
    public function destroy($id){
        try {
            $doctor = Doctor::find($id);
            if (!$doctor) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $doctor->delete();
            return back()->with('success','Data berhasil dihapus');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
}
