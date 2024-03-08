<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seats;

class MekanController extends Controller
{
    public function getMekanDetayi($id)
    {
        $data = [
            'message' => 'Mekan Detayi Çekilecek örneğidir.'
        ];

        return response()->json($data, 200);
    }

    public function getOturmaDuzeni($id)
    {
        // Tüm verileri çekmek için Venue modelini kullanın
        $seats = Seats::all();

        // JSON formatında tüm verileri döndürün
        return response()->json(['seats' => $seats], 200);

        return response()->json($data, 200);
    }

}
