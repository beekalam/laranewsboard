<?php

namespace Tests\Unit;

use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateVideoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function required_fields_to_create_video_post()
    {
        $this->signIn();
        $this->post('admin/video', [])
             ->assertSessionHasErrors('title')
             ->assertSessionHasErrors('category_id');
    }

    /** @test */
    function can_create_video_post()
    {
        $this->signIn();
        $attributes = [
            'category_id' => factory(Category::class)->create(['parent_id' => 0])->id,
            'title'       => $title = 'new post',
            'slug'        => str_slug($title),
        ];

        $this->post('/admin/video', $attributes);
        $this->assertDatabaseHas('posts', $attributes);
        $this->assertDatabaseHas('posts', ['post_type' => 'video']);
    }


}