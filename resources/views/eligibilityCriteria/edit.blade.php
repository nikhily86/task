@extends('layouts.app')

@section('title', 'Edit Eligibility Criteria')

@section('content')
    <div class="container">
        <h2>Edit Eligibility Criteria</h2>
        <form action="{{ route('eligibility_criteria.update', $eligibilityCriteria->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $eligibilityCriteria->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="age_less_than">Age Less Than</label>
                <input type="number" name="age_less_than" id="age_less_than" class="form-control" value="{{ $eligibilityCriteria->age_less_than }}">
                @error('age_less_than')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="age_greater_than">Age Greater Than</label>
                <input type="number" name="age_greater_than" id="age_greater_than" class="form-control" value="{{ $eligibilityCriteria->age_greater_than }}">
                @error('age_greater_than')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="last_login_days_ago">Last Login Days Ago</label>
                <input type="number" name="last_login_days_ago" id="last_login_days_ago" class="form-control" value="{{ $eligibilityCriteria->last_login_days_ago }}">
                @error('last_login_days_ago')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="income_less_than">Income Less Than</label>
                <input type="number" name="income_less_than" id="income_less_than" class="form-control" value="{{ $eligibilityCriteria->income_less_than }}">
                @error('income_less_than')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="income_greater_than">Income Greater Than</label>
                <input type="number" name="income_greater_than" id="income_greater_than" class="form-control" value="{{ $eligibilityCriteria->income_greater_than }}">
                @error('income_greater_than')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Eligibility Criteria</button>
        </form>
    </div>
@endsection
