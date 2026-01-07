<li id="task-{{ $task->id }}"
    class="flex items-center justify-between py-4 border-b">


    @if($task->isArchived())
        test{{ $task->title }}

    @endif

</li>
