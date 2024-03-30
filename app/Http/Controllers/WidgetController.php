<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Shop;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    public function general()
    {

        $shop = Shop::where('name', \request()->get('shop'))->first();
        if (!$shop) {
            return response('', 204);
        }

        $questions = Question::where('shop_id', $shop->id)->where('status', 1)->get();

        return view('widget.general', compact('questions'));
    }
}
