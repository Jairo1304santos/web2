<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{

    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('disciplina.index', compact('disciplinas'));
    }


    public function create()
    {
        return view('disciplina.formulario');
    }

    public function store(Request $request)
    {
        $disciplina = new Disciplina($request->all());
        $disciplina->save();

        return redirect('/disciplina');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
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
