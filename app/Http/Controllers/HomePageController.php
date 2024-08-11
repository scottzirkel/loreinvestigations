<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomePageController extends Controller
{
    public function __invoke()
    {
        $response = Http::withToken(config('services.webstrips.api'))
            ->get(config('services.webstrips.url').'/strips');
        dd($response->json());
        return view('pages.index');
    }
}
