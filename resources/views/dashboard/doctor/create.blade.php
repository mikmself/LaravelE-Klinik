@extends('dashboard.main.master')
@section('title','Create Data Doctor')
@section('content')
    <div class="bg-white p-5 rounded">
        <form action="{{ route('store-doctor') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3">
                <label for="specialist" class="form-label">Specialist</label>
                <input type="text" class="form-control" id="specialist" name="specialist">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('index-doctor') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
