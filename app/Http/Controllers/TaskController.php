<?php

namespace App\Http\Controllers;

use App\Actions\CompleteTaskAction;
use App\Actions\UpdateTaskAction;
use App\Http\Requests\StoreTaskRequest;
use App\Actions\CreateTaskAction;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Enums\TaskStatus;
use App\Enums\TaskPriority;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {


        $tasks = Task::latest()->get()->groupBy('status.value');

        $statuses = TaskStatus::cases();

        return view('tasks.index', compact('tasks' , 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create', [
            'statuses' => TaskStatus::cases(),
            'priorities' => TaskPriority::cases(),
            'users' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request , CreateTaskAction $action)
    {
        $action->execute($request->validated());

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task,
            'statuses' => TaskStatus::cases(),
            'priorities' => TaskPriority::cases(),
            'users' => User::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task, UpdateTaskAction $action)
    {


       $action->execute($task , $request->validated() );

        return redirect()->route('tasks.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {

        $task->delete();

        return redirect()->route('tasks.index');
    }

//    public function complete(Task $task, CompleteTaskAction $action){
//
//        $action->execute($task);
//
//        return response()->json(
//            [
//              'id'=>$task->id,
//              'status'=>$task->status->value,
//
//            ]
//        );
//    }
}
