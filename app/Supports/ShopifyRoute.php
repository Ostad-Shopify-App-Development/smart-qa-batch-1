<?php

namespace App\Supports;

use Illuminate\Support\Facades\URL;
use Osiset\ShopifyApp\Macros\TokenUrl;

class ShopifyRoute extends TokenUrl
{
    public function __invoke(string $route, array $params = [], bool $absolute = true): string
    {
        [$url, $params] = $this->generateParams($route, $params, $absolute);
        if (request()->has('token')) {
            $params['token'] = request()->get('token');
        }

        return URL::route($route, $params);
    }

}
