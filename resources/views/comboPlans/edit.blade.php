@extends('layouts.app')

@section('title', 'Edit Combo Plan')

@section('content')
    <h2>Edit Combo Plan</h2>
    <form action="{{ route('combo_plans.update', $comboPlan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $comboPlan->name }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $comboPlan->price }}">
        </div>
        <div class="form-group">
            <label>Choose Plans</label><br>
            @php
                $comboPlanIds = $comboPlan->plans;
            @endphp
            @foreach($plans as $plan)
            @php
            // dd($comboPlanIds);
            @endphp
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="plans[]" value="{{ $plan->id }}" {{ in_array($plan->id, $comboPlanIds) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $plan->name }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Update Combo Plan</button>
    </form>
@endsection
