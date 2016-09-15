<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class categoriesTest extends TestCase
{

    public function test_categories_list()
    {
        $this->visit('category')->see('1');
    }
}
