@extends('dashboard.main.master')
@section('title','Data Medicine')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Medicine</h6>
            <a href="{{route('create-medicine')}}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($medicines as $medicine)
                        <tr>
                            <td>{{ $medicine->id }}</td>
                            <td>{{ $medicine->name }}</td>
                            <td>{{ $medicine->type }}</td>
                            <td>{{ $medicine->description }}</td>
                            <td>
                                <a href="{{ route('edit-medicine', $medicine->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('destroy-medicine', $medicine->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
