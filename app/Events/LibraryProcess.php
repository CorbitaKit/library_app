<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Library;
class LibraryProcess
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $libray;
    public $library_name;
    public $library_address;
    public $user_id;
    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct($data,$user_id)
    {
        $this->library = new Library;
        $this->library_name = $data->affiliated_library;
        $this->library_address = $data->library_address;
        $this->user_id = $user_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
