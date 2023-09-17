<?php
Route::resource('/lista-tarefas', 'TarefaController');

Route::get('/', function () {
    return view('welcome');
});
