<?php

namespace App\Livewire;

use App\Actions\CreateTaskAction;
use App\Enums\TaskStatus;
use App\Http\Requests\StoreTaskRequest;
use Livewire\Component;
use Livewire\Attributes\Rule;

use Livewire\Attributes\Validate;

class CreateTask extends Component
{
    #[Rule('required|string|min:3|max:255')]

    public string $title = '';

    public TaskStatus $status;


    public function mount(TaskStatus $status):void{
        $this->status = $status;
    }


    public function save(CreateTaskAction $action):void
    {
        $this->validate();

        $action->execute([
            'title' => $this->title,
            'status' => $this->status->value,
        ]);

        $this->title = '';

        $this->dispatch('task-created');


    }
    public function render()
    {
        return view('livewire.create-task');
    }
}
