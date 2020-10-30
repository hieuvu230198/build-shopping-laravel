<?php

namespace App\Http\Controllers\Api\v1\Admin\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function getListUser(Request $request) {
        try {
            $user = User::getListUser();
            return response()->apiRet($user);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->apiRetError($e->getMessage());
        }
    }
}
