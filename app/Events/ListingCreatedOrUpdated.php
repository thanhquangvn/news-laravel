<?php

namespace App\Events;

use App\Models\Listing;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ListingCreatedOrUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $listing;

    /**
     * Create a new event instance.
     *
     * @param  Listing  $listing
     * @return void
     */
    public function __construct(Listing $listing)
    {
        $this->listing = $listing;
    }
}
