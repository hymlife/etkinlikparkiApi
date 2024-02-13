<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $data = [
            'message' => 'Oturma Düzeni Çekilecek örneğidir.'
        ];

        return response()->json($data, 200);
    }
    
}
