<?php

namespace App\Exports;

use App\Models\Tarefa;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TarefasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return auth()->user()->tarefas()->get();
    }

    //metodo incluir titulo na exportação

    public function headings():array{
        return ['id','usuario','tarefa','data conclusão','data criação', 'data atualização'];
    }
}
