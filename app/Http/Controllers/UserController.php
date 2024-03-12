<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        // Listeleme işlemi
        $users = User::all();
        return response()->json(['users' => $users]);
    }

    public function show($id)
    {
        // Belirli bir kullanıcıyı getirme işlemi
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(['user' => $user]);
    }

    public function store(Request $request)
    {
        // Kullanıcı oluşturma işlemi
        $validator = Validator::make($request->all(), $this->getValidationRules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create($request->all());
        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }

    public function update(Request $request, $id)
    {
        // Kullanıcı güncelleme işlemi
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $validator = Validator::make($request->all(), $this->getValidationRules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user->update($request->all());
        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    }

    public function destroy($id)
    {
        // Kullanıcı silme işlemi
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }

    private function getValidationRules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'age' => 'nullable|integer',
            'company' => 'nullable|string',
            // Diğer alanlar için kuralları ekleyebilirsiniz
        ];
    }
}
