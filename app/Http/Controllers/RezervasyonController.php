<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\BookingTemp;
use Illuminate\Http\Request;

class RezervasyonController extends Controller
{
    public function getRezervasyonlarim()
    {
        // İstenen verileri çek
        $bookings = Bookings::all();

        // Eğer veri bulunduysa
        if ($bookings->count() > 0) {
            return response()->json($bookings, 200);
        } else {
            // Veri bulunamadıysa
            $data = [
                'message' => 'Rezervasyon bulunamadı.'
            ];

            return response()->json($data, 404);
        }
    }

    public function getRezervasyonDetayi($id)
    {
        $bookingTempData = BookingTemp::all();

        // Eğer veri bulunduysa
        if ($bookingTempData->count() > 0) {
            return response()->json($bookingTempData, 200);
        } else {
            // Veri bulunamadıysa
            $data = [
                'message' => 'BookingTemp verileri bulunamadı.'
            ];

            return response()->json($data, 404);
        }
    }
}
