<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'page' => 'Beranda',
            'title' => 'Jasa ' . web()->title . ' Jadwal 24 Jam',
            'description' => 'Rekomendasi ' . Str::lower(web()->tagline) . ' yang akan antar jemput anda dengan cepat, aman, dan nyaman.',
            // 'thumbnail' => [
            //     'url' => asset(web()->defaultLogo),
            //     'width' => 672,
            //     'height' => 672,
            //     'alt' => "Logo " . web()->title,
            // ],
        ]);
    }
}
