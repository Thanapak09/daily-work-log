<?php

namespace App\Http\Controllers;

use App\Models\WorkEntry;
use Illuminate\Http\Request;

class WorkEntryController extends Controller
{
    public function index(Request $request)
    {
        $query = WorkEntry::query();

        if ($request->has('date') && $request->date != '') {
            $query->whereDate('start_time', $request->date);
        }

        $entries = $query->orderBy('start_time', 'desc')->get();

        return view('work_entries.index', compact('entries'));
    }

    public function create()
    {
        return view('work_entries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_type' => 'required|string',
            'task_name' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'status' => 'required|string',
        ]);

        WorkEntry::create($request->all());
        return redirect()->route('work_entries.index');
    }

    public function show(WorkEntry $workEntry) {}

    public function edit(WorkEntry $workEntry)
    {
        return view('work_entries.edit', compact('workEntry'));
    }

    public function update(Request $request, WorkEntry $workEntry)
    {
        $request->validate([
            'task_type' => 'required|string',
            'task_name' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'status' => 'required|string',
        ]);

        $workEntry->update($request->all());
        return redirect()->route('work_entries.index')->with('success', 'Work entry updated successfully.');;
    }

    public function destroy(WorkEntry $workEntry)
    {
        $workEntry->delete();
        return redirect()->route('work_entries.index');
    }
}
