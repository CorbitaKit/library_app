<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\LibraryBook;

class LibraryBookProcess
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $book_id;
    public $libraries;
    public $libraryBook;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($libraries, $book_id)
    {


        $this->libraries = $libraries;
        $this->book_id = $book_id;
        foreach($this->libraries as $library){


            $this->libraryBook = new LibraryBook;

            $this->libraryBook->library_id = $library['value'];
            $this->libraryBook->book_id = $this->book_id;
            $this->libraryBook->save();
        }

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
