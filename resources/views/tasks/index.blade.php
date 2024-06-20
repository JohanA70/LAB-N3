<h1>Lista de tareas</h1>
<a href="/tasks/create">Crear</a>
<ul>
    @foreach ($tasks as $task)
    <li>
        <a href="/tasks/{{ $task->id}}">{{ $task->name }}</a>
        <form action="tasks/{{$task}}/complete" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit">Completar</button>
        </form>
    </li>
    @endforeach
</ul>