<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $name = "Neto";
        $codigo_html = '<strong style="color: red">Laravel 9</strong>';

        $data = [
            'name' => $name,
            'codigo' => $codigo_html
        ];


        return view('index', $data);
    }
}
