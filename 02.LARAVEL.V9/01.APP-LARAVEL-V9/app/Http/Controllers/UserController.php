<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function amount(Request $resquest)
    {

        $data = [
            'amount' => $resquest->qtd
        ];

        return view('users', $data);
    }
}
