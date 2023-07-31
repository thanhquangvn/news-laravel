<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Listing;
use PDF;

class GenerateReportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $listing;

    public function __construct(Listing $listing)
    {
        $this->listing = $listing;
    }

    public function handle()
    {
        $pdf = PDF::loadView('pdf.listing', ['listing' => $this->listing]);
        $filePath = public_path("/reports/listing_{$this->listing->id}.pdf");
        $pdf->save($filePath);
    }
}
