@extends('layout')

@section('content')
<form action="{{ route('work_entries.store') }}" method="POST">
    @csrf
    <label>Task Type</label>
    <select name="task_type">
        <option value="Development">Development</option>
        <option value="Test">Test</option>
        <option value="Document">Document</option>
    </select>

    <label>Task Name</label>
    <input type="text" name="task_name">

    <label>Start Time</label>
    <input type="datetime-local" name="start_time">

    <label>End Time</label>
    <input type="datetime-local" name="end_time">

    <label>Status</label>
    <select name="status">
        <option value="ดำเนินการ">ดำเนินการ</option>
        <option value="เสร็จสิ้น">เสร็จสิ้น</option>
        <option value="ยกเลิก">ยกเลิก</option>
    </select>

    <button type="submit">Save</button>
</form>
@endsection
