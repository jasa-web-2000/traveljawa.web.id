<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        return view('pages.contact', [
            'page' => 'Kontak',
            'title' => 'Kontak Pemesanan travel',
            'description' => 'Pesan travel dengan mudah sekarang juga dengan mudah secara online via whatsapp',
        ]);
    }
}
