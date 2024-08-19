<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alunos;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // select * from tb_alunos order by id desc limit 10
     $alunos = Alunos::all();
     return view('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("alunos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Alunos();
        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->nome_pais = $request->nome_pais;
        $aluno->telefone = $request->telefone;
        $aluno->telefone_pais = $request->telefone_pais;
        $aluno->email = $request->email;
        $aluno->email_pais = $request->email_pais;
        $aluno->save();
    
        return response()->json(['message' => 'Aluno salvo com sucesso!']);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alunos = Alunos::findOrFail($id);
        return view("alunos.show", compact("alunos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alunos = Alunos::findOrFail($id);
        return response()->json($alunos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aluno = Alunos::findOrFail($id);
        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->nome_pais = $request->nome_pais;
        $aluno->telefone = $request->telefone;
        $aluno->telefone_pais = $request->telefone_pais;
        $aluno->email = $request->email;
        $aluno->email_pais = $request->email_pais;
        $aluno->save();
    
        return response()->json(['message' => 'Aluno atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alunos = Alunos::findOrFail($id);
        $alunos->delete();
        return response()->json(['message' => 'Aluno excluído com sucesso!']);
    }
}
