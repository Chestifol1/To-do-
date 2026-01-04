



<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Мои задачи
        </h2>
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">
                        Добавить новую задачу
                    </h3>

                    <form method="POST" action="{{ route('tasks.store') }}" class="space-y-5">
                        @csrf

                        <div>
                            <x-input-label for="title" value="Название" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                          value="{{ old('title') }}" required autofocus placeholder="Что нужно сделать?" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" value="Описание (необязательно)" />
                            <textarea name="description" id="description" rows="3"
                                      class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                      placeholder="Подробности...">{{ old('description') }}</textarea>
                        </div>

                        <div class="flex items-center">



                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">
                        Все задачи
                        <span class="text-sm font-normal text-gray-500">({{ $tasks->count() }})</span>
                    </h3>

                    @if($tasks->isEmpty())
                        <p class="text-center text-gray-500 py-12">Пока нет ни одной задачи. Создайте первую выше ↑</p>
                    @else
                        <ul class="space-y-4">
                            @foreach($tasks as $task)

                                {{ dump($task) }}
                                <li  id="{{$task->id}}"class="flex items-center justify-between py-4 border-b border-gray-200 dark:border-gray-700 last:border-0">
                                    <div class="{{ $task->isCompleted() ? 'text-gray-500 line-through' : '' }}">
                                        <div class="font-medium text-lg">{{ $task->title }}</div>
                                        @if($task->description)
                                            <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">{{ $task->description }}</div>
                                            <div class="text-sm text-red-600 dark:text-gray-400 mt-1">{{ $task->due_at }}</div>

                                        @endif
                                        @if($task->completed)
                                            <span class="inline-block mt-2 px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">
                                                Выполнено
                                            </span>
                                        @endif
                                    </div>

                                    <div class="flex items-center space-x-3">

                                        <button
                                            hx-post="{{ route('tasks.complete', $task) }}"
                                            hx-target="#task-{{ $task->id }}"
                                            hx-swap="outerHTML"
                                        >
                                            Complete
                                        </button>





{{--                                        <form action="{{ route('tasks.toggle', $task) }}" method="POST" class="inline">--}}
{{--                                            @csrf--}}
{{--                                            @method('PATCH')--}}
{{--                                            <button type="submit"--}}
{{--                                                    class="px-4 py-2 text-sm font-medium text-white rounded-md transition--}}
{{--                                                           {{ $task->completed--}}
{{--                                                                ? 'bg-gray-500 hover:bg-gray-600'--}}
{{--                                                                : 'bg-green-600 hover:bg-green-700' }}">--}}
{{--                                                {{ $task->completed ? 'Отменить' : 'Выполнено' }}--}}
{{--                                            </button>--}}
{{--                                        </form>--}}

                                        <a href="{{ route('tasks.edit', $task) }}"
                                           class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                            Редактировать
                                        </a>

                                        <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                              onsubmit="return confirm('Точно удалить?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-medium">
                                                Удалить
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>


            @foreach($tasks as $task)

                @include('partials.task', ['task' => $task])
            @endforeach


        </div>
    </div>
</x-app-layout>
