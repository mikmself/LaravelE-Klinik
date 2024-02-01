@extends('dashboard.main.master')
@section('title','Data Doctor')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Doctor</h6>
            <a href="{{route('create-doctor')}}" class="btn btn-primary">Create</a>
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
                        <th>Specialist</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{$doctor->id}}</td>
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->email}}</td>
                            <td>{{$doctor->telephone}}</td>
                            <td>{{$doctor->address}}</td>
                            <td>{{$doctor->specialist}}</td>
                            <td>{{$doctor->status}}</td>
                            <td>
                                <a href="{{route('edit-doctor',$doctor->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('destroy-doctor',$doctor->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
