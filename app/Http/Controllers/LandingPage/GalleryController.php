<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __invoke()
    {
        return view('pages.gallery', [
            'page' => 'Galeri',
            'title' => 'Galeri Mobil Travel',
            'description' => 'Kumpulan mobil travel terbaik dengan berbagai jenis lengkap dan dilengkapi AC nyaman',
        ]);
    }
}
