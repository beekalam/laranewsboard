<?php

namespace Tests\Feature;

use App\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateSubcategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function subcategory_needs_name_color_parent_id()
    {
        $this->post('/admin/subcategories/', [])
             ->assertSessionHasErrors('name')
             ->assertSessionHasErrors('color');
    }

    /** @test */
    function to_create_subcategory_parent_id_should_be_valid()
    {
        $this->post('/admin/subcategories', [
            'parent_id' => '100'
        ])->assertSessionHasErrors('parent_id');
    }



}
