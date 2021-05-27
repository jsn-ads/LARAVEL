<?php

namespace App\Http\Controllers;


use App\Models\Note;

use Illuminate\Http\Request;

class NoteController extends Controller
{

    private $array = ['error' => '', 'result'=> []];

    public function all(){

        $dados = Note::all();

        foreach($dados as $note){
            $this->array['result'][] = [
                'id' => $note->id,
                'title' => $note->title
            ];
        }

        return $this->array;
    }


    public function one($id){

        $note = Note::find($id);

        if($note){
            $this->array['result'] = $note;
        }else{
            $this->array['error']= 'Nota nao encontrada';
        }

        return $this->array;
    }
}
