@extends('dashboard.main.master')
@section('title','Edit Data User')
@section('content')
    <div class="bg-white p-5 rounded">
        <form method="POST" action="{{ route('update-user', $user->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $user->telephone }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('index-user')}}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
