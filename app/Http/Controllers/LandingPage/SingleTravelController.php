<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ThumbnailController;

class SingleTravelController extends Controller
{
    public function __invoke($originName, $destinationName, $originId, $destinationId)
    {


        $origin = location($originId, $originName);
        $destination = location($destinationId, $destinationName);

        if ($originId == $destinationId || !$origin || !$destination) {
            abort(404);
        }

        $recomendation = collect([
            ...province()->random(2),
            ...regency()->random(5),
            ...district()->random(4)
        ]);


        $travel = "Travel " . Str::title($origin->name) . " " . Str::title($destination->name);

        if (request()->routeIs('travel.show.thumbnail')) {
            $thumbnail = new ThumbnailController;
            return $thumbnail(['Travel', Str::title($origin->name), Str::title($destination->name)]);
        }

        $thumbnailUrl = route('travel.show.thumbnail', compact(
            'originName',
            'originId',
            'destinationName',
            'destinationId'
        ));

        // return $this->productSchema($origin, $destination)['rating'];

        return view('pages.travel.single', [
            'page' => $travel,
            'title' => "$travel Murah Untuk Hari Ini",
            'description' => "$travel hari ini dengan sistem door to door, PP, harga murah, jadwal 24 jam, via tol, dan bonus makan",
            'origin' => $origin,
            'destination' => $destination,
            'recomendation' => $recomendation->whereNotIn('id', [$originId, $destinationId])->take(9),
            'thumbnail' => [
                'url' => $thumbnailUrl,
                'width' => 1600,
                'height' => 900,
                'alt' => $travel,
            ],
            'productSchema' => $this->productSchema($origin, $destination, $travel),
        ]);
    }

    public function productSchema($origin, $destination, $title)
    {
        return [
            'offers' => [
                'offerCount' => $origin->id + 6,
                'lowPrice' => 99000,
                'highPrice' => 1999000,
            ],
            'rating' => [
                'ratingValue' => date('Y') % 2 == 0 ? 4.6 : 4.7,
                'reviewCount' => $origin->id + 3,
            ],
            'reviewBody' => 'Pelayanan ' . $title . ' sangat rekomendasi. Admin menerima pesanan pada tengah malam dan driver sangat ramah. Perjalanan travel sangat nyaman, ber-ac, dan cepat via tol penuh.',
        ];
    }
}
