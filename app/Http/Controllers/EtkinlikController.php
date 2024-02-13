<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtkinlikController extends Controller
{
    public function getEtkinlikDetayi($id)
    {
        $data = [
            'message' => 'Mekan Detayi Çekilecek örneğidir.'
        ];

        return response()->json($data, 200);
    }
}
