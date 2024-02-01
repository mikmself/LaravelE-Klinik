@extends('dashboard.main.master')
@section('title','Data Pratice Schedule')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Doctor</h6>
            <a href="{{route('create-practice-schedule')}}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Doctor</th>
                        <th>Day</th>
                        <th>Hour</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($practiceSchedules as $schedule)
                        <tr>
                            <td>{{ $schedule->id }}</td>
                            <td>{{ $schedule->doctor->name }}</td>
                            <td>{{ $schedule->day }}</td>
                            <td>{{ $schedule->hour }}</td>
                            <td>
                                <a href="{{ route('edit-practice-schedule', $schedule->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('destroy-practice-schedule', $schedule->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
