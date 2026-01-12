<div wire:key="create-task-form-{{ $status->value }}">
<form wire:submit="save" class="mb-4">
        <div class="space-y-2">
            <input
                type="text"
                wire:model.live="title"
                placeholder="New Task..."
                class="w-full text-sm rounded-md border-gray-300 dark:bg-gray-900 dark:border-gray-700 shadow-sm focus:ring-indigo-500"
            >
            @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            <button type="submit" class="w-full py-1 px-2 bg-indigo-600 text-white text-xs rounded hover:bg-indigo-700 transition">
                + Add to {{ $status }}
            </button>
        </div>
    </form></div>
