<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $cursos = Curso::all();
        return view('curso.index', compact('cursos'));
    }

    public function create()
    {
        return view('curso.formulario');
    }

    public function store(Request $request)
    {
        $curso = new Curso($request->all());
        $curso->save();

        return redirect('/curso');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
