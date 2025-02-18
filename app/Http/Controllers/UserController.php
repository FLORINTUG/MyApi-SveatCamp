<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list() 
    {
        $users = User::all();

        return response()->json($users);
    }

    public function show(User $user) 
    {
        return response()->json($user);
    }
    
    public function create(Request $request) 
    {
        $data = $request->all();

        $user = User::createUser($data);

        return response()->json($user, 201);
    }

    public function update(Request $request, User $user) 
    {
        $data = $request->all();

        $user->updateProfile($data);

        return response()->json($user);
    }

    public function delete(User $user)
    {
        $user->delete();
    
        return response()->json(204);
    }
}
