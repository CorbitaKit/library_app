<?php

namespace App\Listeners;

use App\Events\LibraryBookProcess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LibraryBookCreation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  LibraryBookProcess  $event
     * @return void
     */
    public function handle(LibraryBookProcess $event)
    {



    }
}
