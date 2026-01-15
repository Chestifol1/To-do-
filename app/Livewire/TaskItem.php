<?php

namespace App\Livewire;

use App\Actions\CompleteTaskAction;
use App\Actions\DeleteTaskAction;
use App\Models\Task;
use Livewire\Component;

class TaskItem extends Component
{


    public Task $task;
    public bool $isEditing = false;


    public function delete(DeleteTaskAction $action ):void{

        $action->execute($this->task);

        $this->dispatch('task-updated');

    }

    public function complete(CompleteTaskAction $action):void{
        $action->execute($this->task);
        $this->dispatch('task-updated');

    }

    public function render()
    {
        return view('livewire.task-item');
    }
}
