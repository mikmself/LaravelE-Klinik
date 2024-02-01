@extends('dashboard.main.master')
@section('title','Data Patient')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Patient</h6>
            <a href="{{route('create-patient')}}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->user->name }}</td>
                            <td>{{ $patient->user->email }}</td>
                            <td>{{ $patient->user->telephone }}</td>
                            <td>{{ $patient->user->address }}</td>
                            <td>
                                <a href="{{route('edit-patient',$patient->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('destroy-patient',$patient->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
