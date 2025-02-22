<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function test_crear_post()
    {
        $response = $this->post('/posts', [
            'title' => 'Título de prueba',
            'content' => 'Contenido de prueba'
        ]);

        $response->assertRedirect('/posts');
        $this->assertDatabaseHas('posts', ['title' => 'Título de prueba']);
    }
}
