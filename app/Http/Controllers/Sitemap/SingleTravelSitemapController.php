<?php

namespace App\Http\Controllers\Sitemap;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleTravelSitemapController extends Controller
{
    public function __invoke($name, $id)
    {
        $primaryLocation = location($id, $name);

        if (!$primaryLocation) {
            abort(404);
        }
        $allData = collect([...province(), ...regency(), ...district()]);

        $result = $allData
            ->filter(function ($item) use ($name, $id) {
                return $id != $item->id;
            })
            ->map(function ($item) use ($name, $id) {
                return route('travel.show', [
                    'originName' => $name,
                    'destinationName' => Str::slug($item->name),
                    'originId' => $id,
                    'destinationId' => $item->id,
                ]);
            });

        $resultReverse = $allData
            ->filter(function ($item) use ($name, $id) {
                return $id != $item->id;
            })
            ->map(function ($item) use ($name, $id) {
                return route('travel.show', [
                    'originName' => Str::slug($item->name),
                    'destinationName' => $name,
                    'originId' => $item->id,
                    'destinationId' => $id,
                ]);
            });

        $collection = collect([$result, $resultReverse]);

        return xml($collection->flatten()->all());
    }
}
