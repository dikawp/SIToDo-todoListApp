<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\personTask;
use Illuminate\Http\Request;

class personTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessionId = auth()->user()->id;
        $personTask = personTask::all()->where('user_id','=',$sessionId);

        return view('tasks.index',[
            'persontask'=>$personTask,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sessionId = auth()->user()->id;
        $category = Category::all()->where('user_id','=',$sessionId);

        return view('tasks.createTask',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sessionId = auth()->user()->id;

        $personTasks = New personTask;
        $personTasks->user_id = $sessionId;
        $personTasks->namaTask	= $request->taskName;
        $personTasks->startDate = $request->startDate;
        $personTasks->dueDate = $request->dueDate;
        $personTasks->status = $request->status;
        $personTasks->category_id = $request->category;
        $personTasks->save();

        return redirect()->route('persontasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sessionId = auth()->user()->id;
        $category = Category::all()->where('user_id','=',$sessionId);

        $task = personTask::find($id);

        return view('tasks.editTask',compact('category','task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = personTask::find($id);
        $task->namaTask = $request->taskName;
        $task->startDate = $request->startDate;
        $task->dueDate = $request->dueDate;
        $task->status = $request->status;
        $task->category_id = $request->category;
        $task->save();

        return redirect()->route('persontasks.index')->with('updateSuccess', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        personTask::find($id)->delete();

        return redirect()->route('persontasks.index')->with('deleteSuccess', '');
    }
}
