


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Task
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <form method="POST" action="{{ route('tasks.update' , $task) }}" class="space-y-5">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="title" value="Name" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                          value="{{ $task->title }}" required autofocus placeholder="Что нужно сделать?" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" value="Description" />
                            <textarea name="description" id="description" rows="3"
                                      class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                      placeholder="Подробности...">{{ $task->description }}</textarea>
                        </div>

                        <div class="flex items-center">
                            <x-primary-button>Update</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>

