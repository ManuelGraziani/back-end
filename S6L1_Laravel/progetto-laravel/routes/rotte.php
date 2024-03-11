<?php

use Illuminate\Support\Facades\Route;

Route::get('attivita/lista-attivita', function () {

    $post1 = new stdClass();

    $post1->id = 1;
    $post1->nome = "Attività 1";
    $post1->descrizione = "Descrizione Attività 1";

    $post2 = new stdClass();

    $post2->id = 2;
    $post2->nome = "Attività 2";
    $post2->descrizione = "Descrizione Attività 2";

    $post3 = new stdClass();

    $post3->id = 3;
    $post3->nome = "Attività 3";
    $post3->descrizione = "Descrizione Attività 3";

    $posts = [$post1, $post2, $post3];

    return view('elenco' , ['posts' => $posts]);
});

Route::get('attivita/visualizza-attivita', function () {
    return view('visualizza');
});

Route::get('attivita/creazione-attivita', function () {
    return view('creazione');
});

Route::get('attivita/modifica-attivita', function () {
    return view('modifica');
});

Route::get('attivita/elimina-attivita', function () {
    return view('elimina');
});