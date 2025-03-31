<div>
    <h2>New Post:</h2>



    <form wire:submit.prevent="save">
        <label>
            <span>Title:</span>
            <input type="text" wire:model="title" />
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>
        <label>
            <span>Content:</span>
            <textarea cols="30" rows="10" wire:model="content"></textarea>
            <small>Characters:
                <span x-text="$wire.content.length"></span>
            </small>
            <small>Words:
                <span x-text="$wire.content.split(' ').length"></span>
            </small>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>
        <button type="submit">Save</button>
    </form>
</div>
