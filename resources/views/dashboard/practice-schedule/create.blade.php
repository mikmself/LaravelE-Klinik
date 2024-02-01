@extends('dashboard.main.master')
@section('title','Create Pratice Schedule')
@section('content')
    <div class="bg-white p-5 rounded">
        <form action="{{ route('store-practice-schedule') }}" method="post">
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
                <label for="day" class="form-label">Day</label>
                <input type="date" class="form-control" id="day" name="day">
            </div>
            <div class="mb-3">
                <label for="hour" class="form-label">Hour</label>
                <input type="text" class="form-control" id="hour" name="hour">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('index-practice-schedule') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
