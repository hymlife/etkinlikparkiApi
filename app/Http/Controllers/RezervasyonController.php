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
        $bookings = Bookings::select(
            'id',
            'customer_id',
            'organiser_id',
            'event_id',
            'quantity',
            'price',
            'event_title',
            'ticket_title',
            'event_category',
            'customer_name',
            'customer_tc',
            'customer_email'
        )->get();

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
       // BookingTemp tablosundan belirli sütunları seçerek tüm verileri al
       $bookingTempData = BookingTemp::select(
        'id',
        'event_id',
        'seat_id',
        'ticket_id',
        'booking_date',
        'booking_time',
        'sessionx',
        'sessionx1',
        'timex',
        'timeexp'
    )->get();

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
