<?php

namespace App\Http\Controllers\Api;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $sliders  = Slider::latest()->paginate(10);
        return response()->json([
            "response" => [
                "status" => 200,
                "message" => "List Data Slider"
            ],
            "data" => $sliders
        ], 200);
    }
}
