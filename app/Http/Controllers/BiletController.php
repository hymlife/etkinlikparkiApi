<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;

class BiletController extends Controller
{
    public function getBilet($id)
    {
        $tickets = Tickets::select('id', 'title', 'price', 'quantity', 'description')->get();

        if ($tickets->count() > 0) {
            return response()->json($tickets, 200);
        } else {
            $data = [
                'message' => 'Bilet bilgisi bulunamadı.'
            ];
    
            return response()->json($data, 404);
        }
    }
}
