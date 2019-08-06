<?php

namespace Tests\Unit;

use App\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_create_posts()
    {
        $this->signIn();
        $attributes = [
            'category_id' => factory(Category::class)->create(['parent_id' => 0])->id,
            'title' =>  $title = 'new post',
            'slug' => str_slug($title),
        ];

        $this->post('/admin/posts', $attributes);
        $this->assertDatabaseHas('posts', $attributes);
    }
}