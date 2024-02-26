<?php

namespace App\Jobs;

use App\Models\Shop;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;

class BulkOperationsFinishJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Shop's domain
     *
     * @var ShopDomain|string
     */
    public string|ShopDomain $shopDomain;

    /**
     * The webhook data
     *
     * @var object
     */
    public object $data;
    /**
     * Create a new job instance.
     */
    public function __construct(string|ShopDomain $shopDomain, object $data)
    {
        $this->shopDomain = $shopDomain;
        $this->data = $data;
        //$this->onConnection('webhook_queue');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $shop = Shop::where('name', $this->shopDomain)->first();

        if (!$shop) {
            return;
        }

        $gql = $this->prepareBulkOperationStatusGQL();

        $response = $shop->api()->graph($gql);

        $url = Arr::get($response, 'body.data.currentBulkOperation.url');

        // TODO: Implement the JSONL read operation from the given URL


    }

    protected function prepareBulkOperationStatusGQL():string
    {
        return <<<QUERY
        query SmartQA {
          currentBulkOperation {
            id
            status
            errorCode
            createdAt
            completedAt
            objectCount
            fileSize
            url
            partialDataUrl
          }
       }
       QUERY;
    }
}
