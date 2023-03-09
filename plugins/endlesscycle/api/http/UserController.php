<?php

namespace EndlessCycle\Api\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use RainLab\User\Facades\Auth;
class UserController extends Controller
{

    public function login(): JsonResponse
    {
        return response()->json([]);
    }

}