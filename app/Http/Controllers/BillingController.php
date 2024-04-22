<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Osiset\ShopifyApp\Storage\Models\Plan;

class BillingController extends Controller
{
    public function pricing()
    {
        $plans = Plan::all();

        return view('pricing', compact('plans'));
    }
}
