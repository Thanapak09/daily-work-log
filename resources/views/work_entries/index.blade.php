@extends('layout')

@section('content')
    <h2>Daily Work Log</h2>

    <form action="{{ route('work_entries.index') }}" method="GET" class="mb-3">
        <label for="date">Search by Date:</label>
        <input type="date" name="date" id="date" value="{{ request('date') }}">
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('work_entries.index') }}" class="btn btn-secondary">Clear</a>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Task Type</th>
                <th>Task Name</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($entries as $entry)
                <tr>
                    <td>{{ $entry->task_type }}</td>
                    <td>{{ $entry->task_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($entry->start_time)->format('Y-m-d H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($entry->end_time)->format('Y-m-d H:i') }}</td>
                    <td>{{ $entry->status }}</td>
                    <td>
                        <a href="{{ route('work_entries.edit', $entry) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('work_entries.destroy', $entry) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No records found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
