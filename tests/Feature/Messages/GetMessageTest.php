<?php

namespace Tests\Feature\Messages;

use Tests\TestCase;
use App\Models\Message;
use Inertia\Testing\Assert;
use App\Http\Resources\MessageResource;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetMessageTest extends TestCase
{   
    use RefreshDatabase;

    public function test_the_user_can_see_the_list_of_messages()
    {
        $this->withoutExceptionHandling();

        Message::factory()->count(4)->create();

        $response = $this->actingAs($this->user())->get(route('messages.index'));

        $messages = MessageResource::collection(Message::all());

        $response->assertInertia(fn (Assert $page) => 
            $page->component('Messages/Index')
                 ->where('messages', $messages));
    }

    public function test_guests_can_not_see_the_list_of_messages()
    {
        // $this->withoutExceptionHandling();

        $response = $this->get(route('messages.index'));

        $response->assertRedirect(route('login'));
    }

    public function test_the_user_can_see_a_message()
    {
        $this->withoutExceptionHandling();

        $message = Message::factory()->create();

        $response = $this->actingAs($this->user())->get(route('messages.show', $message->id));

        $response->assertInertia(fn (Assert $page) => 
            $page->component('Messages/Show')
                 ->where('message', new MessageResource($message)));
    }

}
