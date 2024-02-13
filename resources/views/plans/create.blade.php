@extends('layouts.app')

@section('title', 'Create Plan')

@section('content')
    <h2>Create Plan</h2>
    <form action="{{ route('plans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter plan name">
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter plan price">
            @error('price')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Plan</button>
    </form>

    <a href="{{ route('plans.index') }}" class="btn btn-secondary mt-3">View All Plans</a>
@endsection
