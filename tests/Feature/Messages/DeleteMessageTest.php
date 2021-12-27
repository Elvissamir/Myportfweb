<?php

namespace Tests\Feature\Messages;

use Tests\TestCase;
use App\Models\Message;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteMessageTest extends TestCase
{
   use RefreshDatabase;

    public function test_the_user_can_delete_messages()
    {
        // $this->withoutExceptionHandling();

        $message = Message::factory()->create();

        $this->assertDatabaseCount('messages', 1);

        $response = $this->actingAs($this->user())->delete(route('messages.destroy', $message->id));

        $this->assertDatabaseCount('messages', 0);

        $response->assertRedirect(route('messages.index'));
    }

}
