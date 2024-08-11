<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    public function __invoke()
    {
        $strip = cache()->rememberForever('strips', function () {
            $response = Http::withToken(config('services.webstrips.api'))
                ->get(config('services.webstrips.url').'/strips');
            return $response->json();
        });

        return view('pages.index', [
            'images' => $strip['images']
        ]);
    }
}
