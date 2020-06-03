<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use DatabaseMigrations;

class ArticleTest extends TestCase
{
    public function testAddArticle()
    {
        $response = $this->post(
            '/article',
            [
                'title' => 'Testing',
                'content' => 'Testing'
            ]
        );

        $response->assertRedirect('/article');
    }
}
