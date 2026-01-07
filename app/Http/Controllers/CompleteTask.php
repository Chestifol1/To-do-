<?php

namespace App\Http\Controllers;

use App\Actions\CompleteTaskAction;
use App\Models\Task;

class CompleteTask extends Controller
{
    public function __invoke(Task $task, CompleteTaskAction $action)
    {

        $action->execute($task);

        return view('tasks.partials.completed', compact('task'));
    }
}
