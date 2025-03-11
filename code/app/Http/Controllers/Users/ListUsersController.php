<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class ListUsersController extends Controller
{
    public function __invoke()
    {
        return response()->json(User::all());
    }
}
