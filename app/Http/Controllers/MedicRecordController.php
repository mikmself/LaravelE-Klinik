<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\MedicRecord;
use App\Models\Patien;
use Illuminate\Http\Request;

class MedicRecordController extends Controller
{
    public function index(){
        $medicRecords = MedicRecord::all();
        return view('dashboard.medic-record.index',compact('medicRecords'));
    }
    public function create(){
        $doctors = Doctor::all();
        $patients = Patien::all();
        return view('dashboard.medic-record.create',compact('doctors','patients'));
    }
    public function store(Request $request){
        try {
            MedicRecord::create($request->all());
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
}
