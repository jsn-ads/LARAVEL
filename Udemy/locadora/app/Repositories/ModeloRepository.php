<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class ModeloRepository
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function select_atributos_marca($atributos){
        $this->model = $this->model->with($atributos);
    }

    public function filtro($filtros){

        $filtros = explode(';', $filtros);

        foreach($filtros as $key => $filtro){

            $c = explode(':',$filtro);

            $this->model = $this->model->where($c[0],$c[1],$c[2]);
        }

    }

    public function atributos($atributos){
        $this->model = $this->model->selectRaw($atributos);
    }

    public function get(){
        return $this->model->get();
    }
}
?>
