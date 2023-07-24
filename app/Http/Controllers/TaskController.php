<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Task;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('workspaces.detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $sessionId = auth()->user()->id;

        $task = New Task;
        $task->workspace_id = $request->workId;
        $task->namaTask = $request->taskName;
        $task->startDate = $request->startDate;
        $task->dueDate = $request->dueDate;
        $task->status = $request->status;
        $task->save();

        return redirect()->route('workspaces.show',['workspace' => $task->workspace_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $sessionId = auth()->user()->id;

        $workspace = Workspace::find($id);

        return view('workspaces.workTasks.taskIndex', ['workId' => $workspace->id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);

        return view('workspaces.workTasks.taskEdit', [
            'task' => $task,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->workspace_id = $request->workId;
        $task->namaTask = $request->taskName;
        $task->startDate = $request->startDate;
        $task->dueDate = $request->dueDate;
        $task->status = $request->status;
        $task->save();

        return redirect()->route('workspaces.show',['workspace' => $task->workspace_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::find($id)->delete();
        // $workspace = Workspace::find($id);

        return back();
    }
}
