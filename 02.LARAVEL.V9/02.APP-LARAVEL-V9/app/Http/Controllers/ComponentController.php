<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {

        $data = [
            'list' => [
                'item A',
                'item B',
                'item C',
                'item D'
            ]
        ];

        return view('componente', $data);
    }

    public function people()
    {

        $people = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'name' => 'Jose Neto',
                'birthdate' => '20/11/1989',
                'age' => 35
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'name' => 'Cristina',
                'birthdate' => '20/11/1987',
                'age' => 37
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'name' => 'Giovanna',
                'birthdate' => '04/06/2012',
                'age' => 12
            ]

        ];

        $data['pessoas'] = $people;

        return view('pessoas', $data);
    }

    public function group()
    {
        $array = [];

        for ($i = 0; $i < 50; $i++) {
            $array[$i] = ['img' => 'https://i.pravatar.cc/150?img=' . rand(0, 50)];
        }

        $data['group'] = $array;


        return view('grupos', $data);
    }
}
