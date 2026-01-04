<h1>Add Task</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Task title">
    <textarea name="description" placeholder="Description"></textarea>
    <button
        hx-post="{{ route('tasks.complete', $task) }}"
        hx-target="#task-{{ $task->id }}"
        hx-swap="outerHTML"
    >
        Complete
    </button>

</form>

