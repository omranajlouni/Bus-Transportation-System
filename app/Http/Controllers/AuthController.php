<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends BaseApiController
{
    public function login()
    {
        request()->validate([
            'id' => 'required|id',
            'password' => 'required',
        ]);

        $user = User::where('id', request('id'))->first();

        if (!$user || !Hash::check(request('password'), $user->password)) {
            throw ValidationException::withMessages([
                'id' => ['The provided credentials are incorrect.'],
            ]);
        }



        return $this->sendResponse([
            'id' => $user->id,
            'username' => $user->username
        ]);




        return $this->sendResponse(
            [
                'id' => $user->id,
                'username' => $user->username
            ],
            '',
            201
        );
    }

    public function logout()
    {
        return $this->sendResponse([], 'User logged out!');
    }
}
