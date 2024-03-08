<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Events;
use App\Models\Venues;
use App\Models\Banners;
use Illuminate\Http\Request;




class ApiController extends Controller
{
    public function getKategoriler()
    {
        // categories tablosundan id, name ve slug sütunlarını çek
        $kategoriler = Categories::all();

        // Eğer veri bulunduysa
        if ($kategoriler->count() > 0) {
            return response()->json($kategoriler, 200);
        } else {
            // Veri bulunamadıysa
            $data = [
                'message' => 'Kategoriler bulunamadı.'
            ];

            return response()->json($data, 404);
        }
    }

    public function getMekanlar()
    {
        // Tüm verileri çekmek için Venue modelini kullanın
        $venues = Venues::all();

        // JSON formatında tüm verileri döndürün
        return response()->json(['venues' => $venues], 200);
    }

    public function getGelecekEtkinlikler()
    {
        $events = Events::whereDate('start_date', '>', now()) // 'start_date' günümüzden sonraki olmalı
            ->orderBy('start_date', 'asc') // İhtiyaca göre sıralama yapabilirsiniz
            ->get();

        // Eğer veri bulunduysa
        if ($events->count() > 0) {
            return response()->json($events, 200);
        } else {
            // Veri bulunamadıysa
            $data = [
                'message' => 'Günümüzden sonraki etkinlik bulunamadı.'
            ];

            return response()->json($data, 404);
        }
    }


    public function getTumEtkinler(Request $request)
    {
        // events tablosundan id, name ve slug sütunlarını çek
        $events = Events::all();

        // Eğer veri bulunduysa
        if ($events->count() > 0) {
            return response()->json($events, 200);
        } else {
            // Veri bulunamadıysa
            $data = [
                'message' => 'etkinlik bulunamadı.'
            ];

            return response()->json($data, 404);
        }

    }

    public function getSozlesmeler()
    {
        $data = [
            'message' => 'Sözleşmeler Çekilecek'
        ];

        return response()->json($data, 200);

    }

    public function getBanners()
    {
        $banner = Banners::all();

        // Eğer veri bulunduysa
        if ($banner->count() > 0) {
            return response()->json($banner, 200);
        } else {
            // Veri bulunamadıysa
            $data = [
                'message' => 'banner bulunamadı.'
            ];

            return response()->json($data, 404);
        }
    }
}

