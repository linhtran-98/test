<?php
namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class HelloPusherEvent implements ShouldBroadcast
{
    // use Dispatchable, InteractsWithSockets, SerializesModels;

    // public $message;

    // public function __construct($percent)
    // {
    //     $this->message  = 'Đã lấy được ' . $percent . '%';
    // }

    // public function broadcastOn()
    // {
    //     return ['development'];
    // }

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
  
    public function __construct($message)
    {
        $this->message = $message;
    }
  
    public function broadcastOn()
    {
        return ['my-channel'];
    }
  
    public function broadcastAs()
    {
        return 'my-event';
    }
}
