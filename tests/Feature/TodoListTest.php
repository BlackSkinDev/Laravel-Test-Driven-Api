<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{

    public function test_store_todo_list()
    {
        $response = $this->getJson(route('todo-list.store'));
        $this->assertEquals(1,$this->count($response->json()));

    }
}
