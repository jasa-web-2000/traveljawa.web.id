<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'page' => 'Beranda',
            'title' => 'Jasa Travel Terdekat Untuk Hari Ini',
            'description' => 'Kami menawarkan ' . web()->tagline . ' terbaik dan termurah untuk hari, pesan dengan mudah dan dapatkan diskon s/d 10% ini',
            // 'thumbnail' => [
            //     'url' => asset(web()->defaultLogo),
            //     'width' => 672,
            //     'height' => 672,
            //     'alt' => "Logo " . web()->title,
            // ],
        ]);
    }
}
