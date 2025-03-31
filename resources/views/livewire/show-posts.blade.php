<div>
    <h2>Posts:</h2>
    <a wire:navigate href="posts/create"> Create New Post</a>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <livewire:post-row :key="$post->id" :$post/>
            @endforeach
        </tbody>
    </table>
</div>
