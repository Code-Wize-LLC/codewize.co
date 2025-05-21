<?php

namespace App\Jobs;

use App\Services\HubspotLeadService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class ProcessHubspotLead implements ShouldQueue
{
    use Queueable;

    protected array $payload;

    /**
     * Create a new job instance.
     */
    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $hs = new HubspotLeadService;
        if (! $hs->findLeadByEmail($this->payload['email'])) {
            try {
                $hs->createLead($this->payload);
            } catch (\Throwable $th) {
                Log::error($th);
            }
        }
    }
}
