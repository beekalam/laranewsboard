<?php

namespace Tests\Feature;

use App\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateCategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_create_category()
    {
        $attributes = [
            'name'      => 'catename',
            'color'     => '#abcdef',
            'parent_id' => 0
        ];
        $this->post('/admin/categories/', $attributes);
        $this->assertDatabaseHas('categories', $attributes);
    }

    /** @test */
    function name_and_color_is_required_to_create_a_category()
    {
        $attributes = [
            'color' => '#abcdef'
        ];

        $this->post('/admin/categories/', $attributes)
             ->assertSessionHasErrors('name');

        $attributes = [
            'name' => 'name'
        ];
        $this->post('/admin/categories/', $attributes)
             ->assertSessionHasErrors('color');
    }

    /** @test */
    function category_names_should_be_unique()
    {
        $attributes = [
            'name'      => 'catename',
            'color'     => '#abcdef',
            'parent_id' => 0,
        ];
        $this->post('/admin/categories/', $attributes);
        $this->assertEquals(1, Category::count());
    }

    /** @test */
    function can_delete_category()
    {
        $category = factory(Category::class)->create(['parent_id' => 0]);
        $this->delete('/admin/categories/' . $category->id);
        $this->assertEquals(0, Category::count());
    }


    /** @test */
    function can_update_a_category()
    {
        $this->withoutExceptionHandling();
        $category = factory(Category::class)->create(['parent_id' => 0]);
        $this->put('/admin/categories/' . $category->id, [
            'name'  => 'name changed',
            'color' => '#abcdef'
        ]);
        $this->assertEquals('name changed', Category::first()->name);
    }


}
