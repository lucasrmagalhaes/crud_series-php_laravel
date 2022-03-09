<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', function () {
    $series = [
        'Dexter',
        'Lost',
        'GOT'
    ];

    $html = "<ul>";

    foreach ($series as $serie) {
        $html .= "<li>$serie</li>";
    }

    $html .= "</ul>";

    return $html;
});
