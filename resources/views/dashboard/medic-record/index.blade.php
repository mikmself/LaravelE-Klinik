@extends('dashboard.main.master')
@section('title','Data Medic Record')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Medic Record</h6>
            <a href="{{route('create-medic-record')}}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Doctor</th>
                        <th>Patient</th>
                        <th>Date of Checking</th>
                        <th>Diagnoses</th>
                        <th>Prescription Medicine</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($medicRecords as $record)
                        <tr>
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->doctor->name }}</td>
                            <td>{{ $record->patien->user->name }}</td>
                            <td>{{ $record->date_of_checking }}</td>
                            <td>{{ $record->diagnoses }}</td>
                            <td>{{ $record->prescription_medicine }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
