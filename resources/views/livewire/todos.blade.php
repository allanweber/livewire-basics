<div>

    <form wire:submit="add">
        <input type="text" wire:model.live.debounce.500ms="todo">
        <button type="submit">Add</button>
    </form>
    <span>{{ $todo }}</span>
    <hr>

    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
