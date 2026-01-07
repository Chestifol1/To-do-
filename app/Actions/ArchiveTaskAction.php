<?php

namespace App\Actions;

use App\Models\Task;

class ArchiveTaskAction
{
    public function execute(Task $task): void
    {
        $task->archive();
    }
}
