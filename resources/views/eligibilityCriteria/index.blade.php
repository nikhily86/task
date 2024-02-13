@extends('layouts.app')

@section('title', 'Eligibility Criteria')

@section('content')
    <div class="container">
        <h2>Eligibility Criteria</h2>
        <a href="{{ route('eligibility_criteria.create') }}" class="btn btn-primary mb-3">Create Eligibility Criteria</a>

        @if($eligibilityCriteria->isEmpty())
            <p>No eligibility criteria found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age Less Than</th>
                        <th>Age Greater Than</th>
                        <th>Last Login Days Ago</th>
                        <th>Income Less Than</th>
                        <th>Income Greater Than</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eligibilityCriteria as $criteria)
                        <tr>
                            <td>{{ $criteria->name }}</td>
                            <td>{{ $criteria->age_less_than }}</td>
                            <td>{{ $criteria->age_greater_than }}</td>
                            <td>{{ $criteria->last_login_days_ago }}</td>
                            <td>{{ $criteria->income_less_than }}</td>
                            <td>{{ $criteria->income_greater_than }}</td>
                            <td>
                                <a href="{{ route('eligibility_criteria.edit', $criteria->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('eligibility_criteria.destroy', $criteria->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this eligibility criteria?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
