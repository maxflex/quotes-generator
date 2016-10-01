<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Quote;

class QuotesController extends Controller
{
    public function getRandom()
    {
        return Quote::getRandom();
    }

    public function getNextRandom(Request $request)
    {
        return Quote::getNextRandom($request->previous_id);
    }

    public function store(Request $request)
    {
        Quote::create($request->input());
    }
}
