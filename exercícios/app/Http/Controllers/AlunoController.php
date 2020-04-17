<?php

namespace App\Http\Controllers;



use App\Aluno;
use Illuminate\Http\Request;
class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('aluno.index', compact('alunos'));
    }

    public function create()
    {
        return view('aluno.formulario');
    }

    public function store(Request $request)
    {
        $aluno = new Aluno($request->all());
        $aluno->save();

        return redirect('/aluno');

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


