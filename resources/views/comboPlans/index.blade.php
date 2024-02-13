@extends('layouts.app')

@section('title', 'Manage Combo Plans')

@section('content')
    <h2>Combo Plans</h2>
    <table id="combo-plans-table" class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comboPlans as $comboPlan)
            <tr>
                <td>{{ $comboPlan->name }}</td>
                <td>{{ $comboPlan->price }}</td>
                <td>
                    <a href="{{ route('combo_plans.edit', $comboPlan->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('combo_plans.destroy', $comboPlan->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this combo plan?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('combo_plans.create') }}" class="btn btn-primary mt-3">Create New Combo Plan</a>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#combo-plans-table').DataTable();
        });
    </script>
@endpush
