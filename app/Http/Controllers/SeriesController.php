<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'Dexter',
            'Lost',
            'GOT'
        ];

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;

        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());
    }
}
