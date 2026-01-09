<x-app-layout>

{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--            Мои задачи--}}
{{--        </h2>--}}
{{--    </x-slot>--}}


{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">--}}

{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6">--}}
{{--                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">--}}
{{--                        Сreate New Task--}}
{{--                    </h3>--}}

{{--                    <form method="POST" action="{{ route('tasks.store') }}" class="space-y-5">--}}
{{--                        @csrf--}}

{{--                        <div>--}}
{{--                            <x-input-label for="title" value="Title"/>--}}
{{--                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"--}}
{{--                                          value="{{ old('title') }}" required autofocus placeholder="desc"/>--}}
{{--                            <x-input-error :messages="$errors->get('title')" class="mt-2"/>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <x-input-label for="description" value="description "/>--}}
{{--                            <textarea name="description" id="description" rows="3"--}}
{{--                                      class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"--}}
{{--                                      placeholder="Description...">{{ old('description') }}</textarea>--}}
{{--                        </div>--}}

{{--                        <div class="flex items-center">--}}


{{--                            <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-medium">--}}
{{--                                Create--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6">--}}

{{--                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">--}}
{{--                        Все задачи--}}
{{--                        <span class="text-sm font-normal text-gray-500">({{ $tasks->count() }})</span>--}}
{{--                    </h3>--}}

{{--                    @if($tasks->isEmpty())--}}
{{--                        <p class="text-center text-gray-500 py-12">Пока нет ни одной задачи. Создайте первую выше ↑</p>--}}
{{--                    @else--}}
{{--                        <ul class="space-y-4">--}}
{{--                            @foreach($tasks as $task)--}}

{{--                                --}}{{--                                {{ dump($task) }}--}}
{{--                                <li id="{{$task->id}}"--}}
{{--                                    class="flex items-center justify-between py-4 border-b border-gray-200 dark:border-gray-700 last:border-0">--}}
{{--                                    <div class="{{ $task->isCompleted() ? 'text-gray-500 line-through' : '' }}">--}}
{{--                                        <div class="font-medium text-lg">{{ $task->title }}</div>--}}
{{--                                        @if($task->description)--}}
{{--                                            <div--}}
{{--                                                class="text-sm text-gray-600 dark:text-gray-400 mt-1">{{ $task->description }}</div>--}}
{{--                                            <div--}}
{{--                                                class="text-sm text-red-600 dark:text-gray-400 mt-1">{{ $task->due_at }}</div>--}}

{{--                                        @endif--}}
{{--                                        @if($task->completed)--}}
{{--                                            <span--}}
{{--                                                class="inline-block mt-2 px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">--}}
{{--                                                Выполнено--}}
{{--                                            </span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}

{{--                                    <div class="flex items-center space-x-3">--}}



{{--                                        <button--}}
{{--                                            hx-post="{{ route('tasks.complete', $task) }}"--}}
{{--                                            hx-target="#task-{{ $task->id }}"--}}
{{--                                            hx-swap="outerHTML"--}}
{{--                                        >--}}
{{--                                            Complete--}}
{{--                                        </button>--}}
{{--                                        <button--}}
{{--                                            hx-post="{{ route('tasks.archive', $task) }}"--}}
{{--                                            hx-target="#task-{{ $task->id }}"--}}
{{--                                            hx-swap="outerHTML"--}}
{{--                                        >--}}
{{--                                            Archive--}}
{{--                                        </button>--}}


{{--                                        <a href="{{ route('tasks.edit', $task) }}"--}}
{{--                                           class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">--}}
{{--                                            Редактировать--}}
{{--                                        </a>--}}

{{--                                        <form action="{{ route('tasks.destroy', $task) }}" method="POST"--}}
{{--                                              onsubmit="return confirm('Точно удалить?')" class="inline">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit"--}}
{{--                                                    class="text-red-600 hover:text-red-800 text-sm font-medium">--}}
{{--                                                Удалить--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6">--}}

{{--                    @foreach($tasks as $task)--}}

{{--                        @include('tasks.partials.completed', ['task' => $task])--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6">--}}

{{--                    @foreach($tasks as $task)--}}

{{--                        @include('tasks.partials.archived', ['task' => $task])--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--            </div>--}}



{{--        </div>--}}
{{--    </div>--}}

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

                        {{-- Форма создания задачи специально для этого статуса --}}
                        @include('tasks.partials.create-task-form', ['status' => $status])

                        {{-- Список задач для этого статуса --}}
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

