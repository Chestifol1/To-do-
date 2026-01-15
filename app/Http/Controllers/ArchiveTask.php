<?php

namespace App\Http\Controllers;

use App\Actions\ArchiveTaskAction;
use App\Models\Task;

class ArchiveTask extends Controller
{

    private string $name;

    public function __invoke(Task $task, ArchiveTaskAction $action)
    {

        $action->execute($task);

        return view('tasks.partials.archived', compact('task'));
    }
}

