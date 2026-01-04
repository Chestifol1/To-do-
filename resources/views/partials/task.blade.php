<li id="task-{{ $task->id }}"
    class="flex items-center justify-between py-4 border-b">

    <div class="{{ $task->isCompleted() ? 'line-through text-gray-500' : '' }}">
        {{ $task->title }}
    </div>

    <button
        hx-post="{{ route('tasks.complete', $task) }}"
        hx-target="#task-{{ $task->id }}"
        hx-swap="outerHTML"
    >
        Complete
    </button>
</li>
