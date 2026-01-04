<?php

namespace App\Http\Controllers;

use App\Actions\CompleteTaskAction;
use App\Models\Task;
use Illuminate\Http\Request;

class CompleteTask extends Controller
{

    public function __invoke(Task $task , CompleteTaskAction $action){

        $action->execute($task);
        return view('partials.task', compact('task'));
    }


}
