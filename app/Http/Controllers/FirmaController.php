<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirmaController extends Controller
{
    public function getFirmaBilgileri()
    {
        
        
            $data = [
                'message' => 'Firma Bilgileri Çekilecek örneğidir.'
            ];
    
            return response()->json($data, 200);
        
    }
}
