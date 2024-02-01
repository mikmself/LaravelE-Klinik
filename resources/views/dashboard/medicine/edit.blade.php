@extends('dashboard.main.master')
@section('title','Edit Data Doctor')
@section('content')
    <div class="bg-white p-5 rounded">
        <form action="{{ route('update-medicine', $medicine->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $medicine->name }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $medicine->type }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $medicine->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('index-medicine') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
