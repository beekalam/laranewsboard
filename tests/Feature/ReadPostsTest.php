<?php

namespace Tests\Unit;

use App\Category;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReadPostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_view_list_of_posts()
    {
        $this->withoutExceptionHandling();
        $this->signIn();
        $attributes = [
            'category_id' => factory(Category::class)->create(['parent_id' => 0])->id,
            'title'       => $title = 'new post',
            'slug'        => str_slug($title),
        ];
        $post = factory(Post::class)->create($attributes);

        $this->get('/admin/posts')
             ->assertSee('new post');
    }
}