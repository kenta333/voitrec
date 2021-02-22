<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 

class UsersController extends Controller
{
     public function index()
    {
        // ユーザ一覧をidの降順で取得
        $my = Auth::user();

        // ユーザ一覧ビューでそれを表示
        return view('users.index', [
            'my' => $my,
        ]);
    }
}