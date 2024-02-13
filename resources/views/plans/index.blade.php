@extends('layouts.app')

@section('title', 'All Plans')

@section('content')
    <h2>All Plans</h2>
    <table id="plans-table" class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plans as $plan)
            <tr>
                <td>{{ $plan->name }}</td>
                <td>{{ $plan->price }}</td>
                <td>
                    <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('plans.destroy', $plan->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this plan?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('plans.create') }}" class="btn btn-primary mt-3">Create New Plan</a>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#plans-table').DataTable();
        });
    </script>
@endpush
