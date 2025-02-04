<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function md4_10()
    {

        $dados = [];

        return view('md4_10', $dados);
    }
}
