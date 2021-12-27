<?php

namespace Tests\Feature\Messages;

use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostMessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_guest_can_send_a_message()
    {
        $this->withoutExceptionHandling();

        $message = [
            'title' => 'Title',
            'email' => 'guest@email.com',
            'content' => 'Message content'
        ];

        $this->assertDatabaseCount('messages', 0);

        $response = $this->post(route('messages.store'), $message);

        $this->assertDatabaseCount('messages', 1);

        $this->assertDatabaseHas('messages', [
            'title' => $message['title'],
            'email' => $message['email'],
            'content' => $message['content'],
        ]);

        $response->assertRedirect(route('home'));
    }

    public function test_the_message_title_is_required()
    {
        // $this->withoutExceptionHandling();

        $message = [
            'title' => '',
            'email' => 'guest@email.com',
            'content' => 'Message content'
        ];

        $this->assertDatabaseCount('messages', 0);

        $response = $this->post(route('messages.store'), $message);

        $this->assertDatabaseCount('messages', 0);

        $response->assertRedirect();
        $response->assertSessionHasErrors('title');
    }

    public function test_the_message_title_is_must_be_less_than_twenty_one_letters_long()
    {
        // $this->withoutExceptionHandling();

        $message = [
            'title' => Str::random(21),
            'email' => 'guest@email.com',
            'content' => 'Message content'
        ];

        $this->assertDatabaseCount('messages', 0);

        $response = $this->post(route('messages.store'), $message);

        $this->assertDatabaseCount('messages', 0);

        $response->assertRedirect();
        $response->assertSessionHasErrors('title');
    }

    public function test_the_email_is_required()
    {
        // $this->withoutExceptionHandling();

        $message = [
            'title' => 'Title',
            'email' => '',
            'content' => 'Message content'
        ];

        $this->assertDatabaseCount('messages', 0);

        $response = $this->post(route('messages.store'), $message);

        $this->assertDatabaseCount('messages', 0);

        $response->assertRedirect();
        $response->assertSessionHasErrors('email');
    }

    public function test_the_email_max_length_is_35()
    {
        // $this->withoutExceptionHandling();

        $message = [
            'title' => 'Title',
            'email' => Str::random(36),
            'content' => 'Message content'
        ];

        $this->assertDatabaseCount('messages', 0);

        $response = $this->post(route('messages.store'), $message);

        $this->assertDatabaseCount('messages', 0);

        $response->assertRedirect();
        $response->assertSessionHasErrors('email');
    }

    public function test_the_content_is_required()
    {
        // $this->withoutExceptionHandling();

        $message = [
            'title' => 'Title',
            'email' => 'guest@mail.com',
            'content' => ''
        ];

        $this->assertDatabaseCount('messages', 0);

        $response = $this->post(route('messages.store'), $message);

        $this->assertDatabaseCount('messages', 0);

        $response->assertRedirect();
        $response->assertSessionHasErrors('content');
    }


    public function test_the_content_max_length_is_180_chars()
    {
        // $this->withoutExceptionHandling();

        $message = [
            'title' => 'Title',
            'email' => 'guest@mail.com',
            'content' => Str::random(181),
        ];

        $this->assertDatabaseCount('messages', 0);

        $response = $this->post(route('messages.store'), $message);

        $this->assertDatabaseCount('messages', 0);

        $response->assertRedirect();
        $response->assertSessionHasErrors('content');
    }


}
