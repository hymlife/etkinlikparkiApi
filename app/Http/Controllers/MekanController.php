<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seats;
use App\Models\Venues;

class MekanController extends Controller
{
    public function getMekanDetayi($id)
    {
        // Belirtilen ID'ye sahip mekanı bul
        $mekan = Venues::find($id);

        // Mekan bulunduysa
        if ($mekan) {
            // JSON formatında mekan detaylarını döndür
            return response()->json(['mekan' => $mekan], 200);
        } else {
            // Mekan bulunamadı durumunda bir hata mesajı döndür
            $data = [
                'message' => 'Belirtilen ID\'ye sahip mekan bulunamadı.'
            ];
            return response()->json($data, 404);
        }
    }

    public function getOturmaDuzeni($id)
    {
        // Tüm verileri çekmek için Venue modelini kullanın
        $seats = Seats::all();

        // JSON formatında tüm verileri döndürün
        return response()->json(['seats' => $seats], 200);


    }

}
