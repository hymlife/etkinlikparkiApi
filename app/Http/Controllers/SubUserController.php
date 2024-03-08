<?php

namespace App\Http\Controllers;

use App\Models\SubUser;
use Illuminate\Http\Request;

class SubUserController extends Controller
{
    public function index()
    {
        // Tüm sub kullanıcılarını getir ve JSON olarak döndür
        $subUsers = SubUser::all();
        return response()->json($subUsers);
    }

    public function create()
    {
        // Boş bir JSON nesnesi döndür (kullanıcı oluşturma formu gerekli değil)
        return response()->json([]);
    }

    public function store(Request $request)
    {
        // Yeni bir sub kullanıcısı oluştur ve başarılı yanıt döndür
        SubUser::create($request->all());
        return response()->json(['message' => 'User created successfully']);
    }

    public function edit($id)
    {
        // Belirli bir sub kullanıcısını getir ve JSON olarak döndür
        $subUser = SubUser::find($id);
        return response()->json($subUser);
    }

    public function update(Request $request, $id)
    {
        // Belirli bir sub kullanıcısını güncelle ve başarılı yanıt döndür
        $subUser = SubUser::find($id);
        $subUser->update($request->all());
        return response()->json(['message' => 'User updated successfully']);
    }

    public function destroy($id)
    {
        // Belirli bir sub kullanıcısını sil ve başarılı yanıt döndür
        $subUser = SubUser::find($id);
        $subUser->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}
