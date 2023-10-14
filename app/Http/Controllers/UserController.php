<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function show() {
        $users = DB::select('select * from User where id = :id', ['id' => 1]);

        return view('user.profile', ['users' => $users]);
    }
}
