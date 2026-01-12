<div>
    <div class="mt-6 space-y-4">
        @foreach($tasks as $task)
            <x-task-card :task="$task" />
        @endforeach
    </div>
</div>
