<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
