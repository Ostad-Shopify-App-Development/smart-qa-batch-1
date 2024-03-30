<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'shopify_product_id', 'shop_id', 'customer_email', 'customer_name', 'status', 'is_verified'];
}
