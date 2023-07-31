<?php

namespace App\Listeners;

use App\Events\ListingCreatedOrUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\GenerateReportJob;

class GenerateListingReport implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  ListingCreatedOrUpdated  $event
     * @return void
     */
    public function handle(ListingCreatedOrUpdated $event)
    {
        GenerateReportJob::dispatch($event->listing);
    }
}
