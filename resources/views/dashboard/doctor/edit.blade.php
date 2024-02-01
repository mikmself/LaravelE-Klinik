@extends('dashboard.main.master')
@section('title','Edit Data Doctor')
@section('content')
    <div class="bg-white p-5 rounded">
        <form method="POST" action="{{ route('update-doctor', $doctor->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $doctor->name }}" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $doctor->email }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $doctor->telephone }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $doctor->address }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('index-doctor')}}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
