<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso', 'CursoController@index');
Route::post('/curso', 'CursoController@store');
Route::get('/curso/create', 'CursoController@create');

Route::get('/disciplina', 'DisciplinaController@index');
Route::post('/disciplina', 'DisciplinaController@store');
Route::get('/disciplina/create', 'DisciplinaController@create');

Route::get('/aluno', 'AlunoController@index');
Route::post('/aluno', 'AlunoController@store');
Route::get('/aluno/create', 'AlunoController@create');

Route::get('/professor', 'ProfessorController@index');
Route::post('/professor', 'ProfessorController@store');
Route::get('/professor/create', 'ProfessorController@create');

Route::get('/turma', 'TurmaController@index');
Route::post('/turma', 'TurmaController@store');
Route::get('/turma/create', 'TurmaController@create');