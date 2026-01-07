<?php

namespace App\Actions;

use App\Models\Task;

class CompleteTaskAction
{
    public function execute(Task $task): void
    {
        $task->complete();
    }
}
