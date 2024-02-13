@extends('layouts.app')

@section('title', 'Create Combo Plan')

@section('content')
    <h2>Create Combo Plan</h2>
    <form action="{{ route('combo_plans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter combo plan name">
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter combo plan price">
            @error('price')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Choose Plans</label><br>
            @foreach($plans as $plan)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="plans[]" value="{{ $plan->id }}">
                    <label class="form-check-label">{{ $plan->name }}</label>
                </div>
            @endforeach
            @error('plans')
                <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Combo Plan</button>
    </form>
@endsection
