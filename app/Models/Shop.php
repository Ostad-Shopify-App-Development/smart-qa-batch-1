<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Osiset\ShopifyApp\Contracts\ShopModel as IShopModel;
use Osiset\ShopifyApp\Traits\ShopModel;

class Shop extends Authenticatable implements IShopModel
{
    use HasFactory;
    use ShopModel;

    protected $fillable = [
        'shopify_id',
        'name',
        'email',
        'domain',
        'password',
        'shopify_namespace',
        'shopify_fremium',
        'plan_id',
        'shopify_grandfathered',
    ];
}
