@extends('dashboard.main.master')
@section('title','Data Registration')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Registration</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Doctor</th>
                        <th>Patient</th>
                        <th>Registration Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registrations as $registration)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->doctor->name }}</td>
                            <td>{{ $registration['patien']['user']['name']}}</td>
                            <td>{{ $registration->registration_date }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
