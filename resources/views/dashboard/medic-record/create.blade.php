@extends('dashboard.main.master')
@section('title','Create Data Doctor')
@section('content')
    <div class="bg-white p-5 rounded">
        <form action="{{ route('store-medic-record') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="doctor_id" class="form-label">Doctor</label>
                <select class="form-control" id="doctor_id" name="doctor_id">
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="patien_id" class="form-label">Patient</label>
                <select class="form-control" id="patien_id" name="patien_id">
                    @foreach($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="date_of_checking" class="form-label">Date of Checking</label>
                <input type="date" class="form-control" id="date_of_checking" name="date_of_checking">
            </div>
            <div class="mb-3">
                <label for="diagnoses" class="form-label">Diagnoses</label>
                <input type="text" class="form-control" id="diagnoses" name="diagnoses">
            </div>
            <div class="mb-3">
                <label for="prescription_medicine" class="form-label">Prescription Medicine</label>
                <input type="text" class="form-control" id="prescription_medicine" name="prescription_medicine">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('index-medic-record') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
