<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listar()
    {
        $series = [
            'The Flash', 
            'Vikings', 
            'La Casa de Papel',
            'Agents of Shields',
            'What if...',
            'The 100',
            'Loki'
        ];

        return response(
            json_encode($series), 
            200
        );
    }

    public function criar()
    {

    }

    public function atualizar()
    {

    }

    public function deletar()
    {
        
    }
}
