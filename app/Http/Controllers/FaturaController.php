<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaturaController extends Controller
{
    public function getFatura($id)
    {
        $data = [
            'message' => 'Faturalar Çekilecek örneğidir.'
        ];

        return response()->json($data, 200);
    }
}
