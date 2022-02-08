<?php

namespace App\Listeners;

use App\Events\LibraryProcess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LibraryCreation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LibraryProcess  $event
     * @return void
     */
    public function handle(LibraryProcess $event)
    {
        $event->library->name = $event->library_name;
        $event->library->address = $event->library_address;
        $event->library->user_id = $event->user_id;
        $event->library->save();
    }
}
