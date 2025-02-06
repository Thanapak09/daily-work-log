@extends('layout')

@section('content')
<h2>Edit Work Entry</h2>

<form action="{{ route('work_entries.update', $workEntry) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Task Type</label>
    <select name="task_type">
        <option value="Development" {{ $workEntry->task_type == 'Development' ? 'selected' : '' }}>Development</option>
        <option value="Test" {{ $workEntry->task_type == 'Test' ? 'selected' : '' }}>Test</option>
        <option value="Document" {{ $workEntry->task_type == 'Document' ? 'selected' : '' }}>Document</option>
    </select>

    <label>Task Name</label>
    <input type="text" name="task_name" value="{{ $workEntry->task_name }}" required>

    <label>Start Time</label>
    <input type="datetime-local" name="start_time" value="{{ \Carbon\Carbon::parse($workEntry->start_time)->format('Y-m-d\TH:i') }}" required>

    <label>End Time</label>
    <input type="datetime-local" name="end_time" value="{{ \Carbon\Carbon::parse($workEntry->end_time)->format('Y-m-d\TH:i') }}" required>

    <label>Status</label>
    <select name="status">
        <option value="ดำเนินการ" {{ $workEntry->status == 'ดำเนินการ' ? 'selected' : '' }}>ดำเนินการ</option>
        <option value="เสร็จสิ้น" {{ $workEntry->status == 'เสร็จสิ้น' ? 'selected' : '' }}>เสร็จสิ้น</option>
        <option value="ยกเลิก" {{ $workEntry->status == 'ยกเลิก' ? 'selected' : '' }}>ยกเลิก</option>
    </select>

    <button type="submit">Update</button>
</form>

<a href="{{ route('work_entries.index') }}" class="btn btn-secondary">Back</a>
@endsection
