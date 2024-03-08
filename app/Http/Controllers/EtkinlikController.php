<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EtkinlikController extends Controller
{
    public function getEtkinlikDetayi($id)
    {
        // Belirtilen ID'ye sahip etkinliği bul
        $etkinlik = Events::find($id);

        // Etkinlik bulunduysa
        if ($etkinlik) {
            // JSON formatında etkinlik detaylarını döndür
            return response()->json(['etkinlik' => $etkinlik], 200);
        } else {
            // Etkinlik bulunamadı durumunda bir hata mesajı döndür
            $data = [
                'message' => 'Belirtilen ID\'ye sahip etkinlik bulunamadı.'
            ];
            return response()->json($data, 404);
        }
    }
}
