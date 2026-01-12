<form method="POST" action="{{ route('tasks.store') }}" class="mb-4">
    @csrf
    <input type="hidden" name="status" value="{{ $status->value }}">

    <div class="space-y-2">
        <input type="text" name="title" placeholder="New Tasks..."
               class="w-full text-sm rounded-md border-gray-300 dark:bg-gray-900 dark:border-gray-700 shadow-sm focus:ring-indigo-500">

        <button type="submit" class="w-full py-1 px-2 bg-indigo-600 text-white text-xs rounded hover:bg-indigo-700 transition">
            + Add to {{ $status->value }}
        </button>
    </div>
</form>
