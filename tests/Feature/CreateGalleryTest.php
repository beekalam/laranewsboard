<?php

namespace Tests\Unit;

use App\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateGalleryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function required_fields_to_create_ordered_list()
    {
        $this->signIn();
        $this->post('admin/gallery',[ ])
            ->assertSessionHasErrors('title')
            ->assertSessionHasErrors('category_id');
    }

    /** @test */
    function can_create_ordered_list()
    {
        $this->withoutExceptionHandling();
        $this->signIn();
        $attributes = [
            'category_id' => factory(Category::class)->create(['parent_id' => 0])->id,
            'title' =>  $title = 'new post',
            'slug' => str_slug($title),
        ];

        $this->post('/admin/gallery', $attributes);
        $this->assertDatabaseHas('posts', $attributes);
        $this->assertDatabaseHas('posts',['post_type' => 'gallery']);
    }

    
}