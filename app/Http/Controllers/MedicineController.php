<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index(){
        $medicines = Medicine::all();
        return view('dashboard.medicine.index',compact('medicines'));
    }
    public function create(){
        return view('dashboard.medicine.create');
    }
    public function store(Request $request){
        try {
            Medicine::create($request->all());
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
    public function edit($id){
        $medicine = Medicine::find($id);
        if (!$medicine) {
            return back()->with('error', 'Data tidak ditemukan');
        }
        return view('dashboard.medicine.edit',compact('medicine'));
    }
    public function update($id,Request $request){
        try {
            $medicine = Medicine::find($id);
            if (!$medicine) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $medicine->update($request->all());
            return back()->with('success', 'Data berhasil diubah');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
    public function destroy($id){
        try {
            $medicine = Medicine::find($id);
            if (!$medicine) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $medicine->delete();
            return back()->with('success','Data berhasil dihapus');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
}
