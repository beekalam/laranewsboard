<?php

namespace Tests\Unit;

use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_category_can_have_children()
    {
        $category = factory(Category::class)->create(['parent_id' => 0]);
        factory(Category::class, 5)->create(['parent_id' => $category->id]);
        $this->assertEquals(5, $category->children()->count());
    }

    /** @test */
    function a_category_can_have_a_parent()
    {
        $parent = factory(Category::class)->create(['parent_id' => 0]);
        $category = factory(Category::class)->create(['parent_id' => $parent->id]);
        $this->assertEquals($parent->name, $category->parent()->name);
    }
}