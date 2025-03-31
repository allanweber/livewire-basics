<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\Post;

class CreatePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_new_post()
    {

        $post = Post::whereTitle('Some title')->first();
        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', 'Some title')
            ->set('content', 'This is a test post.')
            ->call('save');

        $this->assertDatabaseHas('posts', [
            'title' => 'Some title',
            'content' => 'This is a test post.',
        ]);

        $post = Post::whereTitle('Some title')->first();
        $post->delete();
    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);
    }

    /** @test */
    public function title_must_be_at_least_5_characters()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '1234')
            ->call('save')
            ->assertHasErrors(['title' => 'min']);
    }

    /** @test */
    public function content_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('content', '')
            ->call('save')
            ->assertHasErrors(['content' => 'required']);
    }

    /** @test */
    public function content_must_be_at_least_10_characters()
    {
        Livewire::test(CreatePost::class)
            ->set('content', '123456789')
            ->call('save')
            ->assertHasErrors(['content' => 'min']);
    }
}
