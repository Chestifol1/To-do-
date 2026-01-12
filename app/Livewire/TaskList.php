<?php

namespace App\Livewire;

use App\Models\Task;
use App\Enums\TaskStatus;
use Livewire\Attributes\On;
use Livewire\Component;

class TaskList extends Component
{

    public TaskStatus $status;

    #[On('task-created')]

    public function refresh(): void {}

    public function render()
    {
        $tasks = Task::where('status', $this->status)->latest()->get();
        return view('livewire.task-list', compact('tasks'));
    }
}
