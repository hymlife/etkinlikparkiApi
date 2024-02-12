<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;



class ApiController extends Controller
{
    public function getKategoriler()
    {
        return response()->json(['message' => 'Kategoriler başarıyla getirildi']);
    }

    public function getMekanlar()
    {
        return response()->json(['message' => 'Mekanlar başarıyla getirildi']);
    }

    public function getGelecekEtkinlikler()
    {
        // Gelecek etkinlikleri getirme işlemleri buraya eklenecek
        return response()->json(['message' => 'Mekanlar başarıyla getirildi']);

    }

    public function getTumEtkinler(Request $request)
    {
        // Tüm etkinlikleri getirme işlemleri buraya eklenecek
        return response()->json(['message' => 'Mekanlar başarıyla getirildi']);

    }

    public function getSozlesmeler()
    {
        // Sözleşmeleri getirme işlemleri buraya eklenecek
        return response()->json(['message' => 'Mekanlar başarıyla getirildi']);

    }
}

