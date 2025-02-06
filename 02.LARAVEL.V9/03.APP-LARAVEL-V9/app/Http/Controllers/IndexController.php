<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function md4_10()
    {

        $people = [
            [
                'name' => 'Jose Neto',
                'age' => 35,
                'birthdate' => '20/11/1989',
                'city' => 'Goiânia'
            ],
            [
                'name' => 'Cristina Monik',
                'age' => 37,
                'birthdate' => '11/12/1987',
                'city' => 'Israelandia'
            ]

        ];

        $dados['people'] = $people;

        return view('md4_10', $dados);
    }

    public function md4_12(){

        $data = [];

        return view('md4_12',$data);
    }
}
