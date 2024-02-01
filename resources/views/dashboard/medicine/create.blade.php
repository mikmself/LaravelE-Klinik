@extends('dashboard.main.master')
@section('title','Create Data Medicine')
@section('content')
    <div class="bg-white p-5 rounded">
        <form action="{{ route('store-medicine') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('index-medicine') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
