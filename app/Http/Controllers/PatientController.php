<?php

namespace App\Http\Controllers;

use App\Models\Patien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function index(){
        $patients = Patien::whereHas('user', function ($query) {
            $query->where('level', 'user');
        })->get();
        return view('dashboard.patient.index',compact('patients'));
    }
    public function create(){
        return view('dashboard.patient.create');
    }
    public function store(Request $request){
        try {
            $user = User::create($request->all());
            Patien::create([
                'user_id' => $user->id
            ]);
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
    public function edit($id){
        $patient = Patien::find($id);
        if (!$patient) {
            return back()->with('error', 'Data tidak ditemukan');
        }
        return view('dashboard.patient.edit',compact('patient'));
    }
    public function update($id,Request $request){
        try {
            $patient = Patien::find($id);
            if (!$patient) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $user = $patient->user;
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'telephone' => $request->input('telephone'),
                'address' => $request->input('address'),
                'password' => $request->filled('password') ? Hash::make($request->input('password')) : $user->password,
            ]);
            return back()->with('success', 'Data berhasil diubah');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
    public function destroy($id){
        try {
            $patient = Patien::find($id);
            if (!$patient) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $patient->delete();
            return back()->with('success','Data berhasil dihapus');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
}
