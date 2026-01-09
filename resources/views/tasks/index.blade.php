<x-app-layout>


    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 items-start">

                @foreach($statuses as $status)
                    <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                        <h3 class="font-bold text-gray-700 dark:text-gray-200 mb-4 flex justify-between items-center">
                            {{ $status->name }}
                            <span class="text-xs bg-gray-200 dark:bg-gray-700 px-2 py-1 rounded">
                            {{ count($tasks->get($status->value, [])) }}
                        </span>
                        </h3>

                        @include('tasks.partials.create-task-form', ['status' => $status])

                        <div class="mt-6 space-y-4">
                            @foreach($tasks->get($status->value, []) as $task)
                                <x-task-card :task="$task" />
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</x-app-layout>

{{-- resources/views/tasks/index.blade.php --}}

