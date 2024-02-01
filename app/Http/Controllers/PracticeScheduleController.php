<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\PracticeSchedule;
use Illuminate\Http\Request;

class PracticeScheduleController extends Controller
{
    public function index(){
        $practiceSchedules = PracticeSchedule::all();
        return view('dashboard.practice-schedule.index',compact('practiceSchedules'));
    }
    public function create(){
        $doctors = Doctor::all();
        return view('dashboard.practice-schedule.create',compact('doctors'));
    }
    public function store(Request $request){
        try {
            PracticeSchedule::create($request->all());
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
    public function edit($id){
        $practiceSchedule = PracticeSchedule::find($id);
        $doctors = Doctor::all();
        if (!$practiceSchedule) {
            return back()->with('error', 'Data tidak ditemukan');
        }
        return view('dashboard.practice-schedule.edit',compact('practiceSchedule','doctors'));
    }
    public function update($id,Request $request){
        try {
            $practiceSchedule = PracticeSchedule::find($id);
            if (!$practiceSchedule) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $practiceSchedule->update($request->all());
            return back()->with('success', 'Data berhasil diubah');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
    public function destroy($id){
        try {
            $practiceSchedule = PracticeSchedule::find($id);
            if (!$practiceSchedule) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $practiceSchedule->delete();
            return back()->with('success','Data berhasil dihapus');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
}
