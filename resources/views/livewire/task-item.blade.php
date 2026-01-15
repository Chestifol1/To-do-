
<div class="bg-white dark:bg-gray-900 p-4 rounded shadow-sm border border-gray-200 dark:border-gray-700">
    <div class="flex items-center justify-between mb-2">
        <span class="text-xs font-semibold uppercase tracking-wide text-gray-500">
            ID: {{ $task->id }}
        </span>
    </div>

    <h4 class="font-medium text-gray-900 dark:text-gray-100">
        {{ $task->title }}
    </h4>

    @if($task->description)
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1 line-clamp-2">
            {{ $task->description }}
        </p>
    @endif

    <div class="mt-4 flex items-center justify-between gap-2">
        <a href="{{ route('tasks.edit', $task) }}" class="text-xs text-indigo-600 hover:text-indigo-800 font-medium">
            Edit
        </a>

        <button
            wire:click="delete"
            wire:confirm="Are your sure ?"
            class="text-xs text-red-600 hover:text-red-800 font-medium"

        >
            Delete
        </button>

        <button
            wire:click="complete"
            class="text-xs text-red-600 hover:text-red-800 font-medium"

        >
            Complete
        </button>
    </div>
</div>
