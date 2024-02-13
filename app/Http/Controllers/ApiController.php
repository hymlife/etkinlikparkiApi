<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class ApiController extends Controller
{
    public function getKategoriler()
    {
        // Veritabanı işlemleri olmadan, sabit bir veri döndürelim
        $data = [
            'message' => 'Merhaba, bu bir API örneğidir.'
        ];

        return response()->json($data, 200);
    }

    public function getMekanlar()
    {
        $data = [
            'message' => 'Merhaba, bu bir API örneğidir.'
        ];

        return response()->json($data, 200);
    }

    public function getGelecekEtkinlikler()
    {
        $data = [
            'message' => 'Merhaba, bu bir API örneğidir.'
        ];

        return response()->json($data, 200);

    }

    public function getTumEtkinler(Request $request)
    {
        $data = [
            'message' => 'Merhaba, bu bir API örneğidir.'
        ];

        return response()->json($data, 200);

    }

    public function getSozlesmeler()
    {
        $data = [
            'message' => 'Merhaba, bu bir API örneğidir.'
        ];

        return response()->json($data, 200);

    }
}

