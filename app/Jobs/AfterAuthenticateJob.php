<?php

namespace App\Jobs;

use App\Models\Shop;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Osiset\ShopifyApp\Contracts\Objects\Values\ShopDomain;

class AfterAuthenticateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $shop;
    /**
     * Create a new job instance.
     */
    public function __construct(Shop|ShopDomain $shop)
    {
        $this->shop = $shop;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $scriptTags = config('shopify-app.scripttags', []);

        foreach ($scriptTags as $scriptTag) {
            $this->shop->api()->rest('POST', '/admin/api/2021-07/script_tags.json', [
                'script_tag' => $scriptTag,
            ]);
        }
    }
}
