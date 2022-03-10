<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        $request->session()
            ->flash(
                'mensagem',
                "A série {$serie->nome} foi adicionada com sucesso!"
            );

        return redirect('/series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        $request->session()
        ->flash(
            'mensagem',
            "Série removida com sucesso!"
        );

        return redirect('/series');
    }
}
