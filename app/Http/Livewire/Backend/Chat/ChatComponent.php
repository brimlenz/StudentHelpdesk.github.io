<?php

namespace App\Http\Livewire\Backend\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatComponent extends Component
{
    public $request;

    public $message;

    public $messages;


    public $conversation;
    public $image;

    public function mount($request)
    {
        $this->request = Request::where('id', $request)->first();
        $this->conversation = Conversation::where('request_id', $this->request->id)->first();

        if ($this->conversation) {
            $this->messages = Message::where('conversation_id', $this->conversation->id)->get();
        }
    }

    public function send()
    {
        $message = new Message();
        $message->conversation_id = $this->conversation->id;
        $message->user_id = Auth::user()->id;
        $message->message = $this->message;
        $message->save();
        toastr()->success('Message sent!');
        $this->message = null;
        
       
    }
    

    public function closeRequest()
    {
        $chats = Message::where('conversation_id', $this->conversation->id)->get();
        if ($chats->count() > 0) {
            $this->request->status = 'solved';
            $this->request->update();
            toastr()->success('Request closed');
        } else {
            toastr()->error('Provide feedback to the student');
        }
    }
    public function render()
    {

        return view(
            'livewire.backend.chat.chat-component'
        )->layout('layouts.dashboard');
    }
}
