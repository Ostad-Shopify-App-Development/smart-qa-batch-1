<?php

if (!function_exists('shopify_webhook_url')) {
    function shopify_webhook_url(string $webhook): string
    {
        return env('APP_URL') . \Illuminate\Support\Str::start($webhook, '/');
    }
}
