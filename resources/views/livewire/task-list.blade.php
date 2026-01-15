<div>
    <div class="mt-6 space-y-4">
        @foreach($tasks as $task)
{{--            <x-task-card :task="$task" />--}}
            <livewire:task-item :task="$task" :key="'task-'.$task->id" />

        @endforeach

    </div>
</div>
