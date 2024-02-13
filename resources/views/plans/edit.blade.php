@extends('layouts.app')

@section('title', 'Edit Plan')

@section('content')
    <h2>Edit Plan</h2>
    <form action="{{ route('plans.update', $plan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $plan->name }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $plan->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Plan</button>
    </form>
@endsection
