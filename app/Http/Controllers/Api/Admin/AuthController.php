<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\AuthRequest;
use App\Http\Resources\UserResource;
use App\Models\Admin;
use App\Traits\FormatResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    use FormatResponse;

    public function token(AuthRequest $request): \Illuminate\Http\JsonResponse
    {
        $user = Admin::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->failed('The provided credentials are incorrect.');
        }

        $token = $user->createToken(Str::uuid())->plainTextToken;
        return $this->success(['user' => new UserResource($user), 'auth_token' => $token]);
    }

    public function user(Request $request): \Illuminate\Http\JsonResponse
    {
        return $this->success(new UserResource($request->user()));
    }
}
