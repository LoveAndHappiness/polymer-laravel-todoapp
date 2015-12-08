<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Task::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Task::create([
            'title' => $request->input('title'),
            'completed' => $request->input('completed')
        ]);

        return response()->json(['message' => 'Task saved']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $task = Task::findOrFail($id);

        $task->update([
            'title' => $request->input('title'),
            'completed' => $request->input('completed')
        ]);

        return response()->json(['message' => 'Task successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Task::destroy($id);

        return response()->json(['message' => 'Task successfully deleted.']);
    }

    /**
     * Complete all Tasks
     * 
     * @return \Illuminate\Http\Response
     */
    public function completeAll()
    {
        $tasks = Task::where('completed', false)->get();

        foreach ($tasks as $task) {
            $task->update(['completed' => true]);
        }

        return response()->json(['message' => 'Completed All Tasks']);
    }

    /**
     * Clear all completed Tasks
     * 
     * @return \Illuminate\Http\Response
     */
    public function clearCompleted()
    {
        $tasks = Task::where('completed', true)->get();

        foreach ($tasks as $task) {
            Task::destroy($task->id);
        }

        return response()->json(['message' => 'Cleared Completed Tasks']);
    }
}
