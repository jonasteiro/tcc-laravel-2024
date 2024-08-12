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
        $dadosParaSalvar = $request->validate([
            'nome' => 'required|max:255',
            'cpf' => 'required|max:255',
            'nome_pais' => 'required|max:255',
            'telefone' => 'required|numeric',
            'telefone_pais' => 'required|numeric',
            'email' => 'required|max:255',
            'email_pais' => 'required|max:255',
        ]);
        $aluno = Alunos::create($dadosParaSalvar);
        return redirect()->route('alunos.index')->withSuccess(__('Aluno criado com sucesso'));
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
        return view("alunos.edit", compact("alunos"));
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
        $storeData = $request->validate([
            'nome' => 'required|max:255',
            'cpf' => 'required|max:255',
            'nome_pais' => 'required|max:255',
            'telefone' => 'required|numeric',
            'telefone_pais' => 'required|numeric',
            'email' => 'required|max:255',
            'email_pais' => 'required|max:255',
        ]);
        
        Alunos::whereId($id)->update($storeData);
        return redirect('/alunos')->with('completed', 'Aluno atualizado com sucesso');
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
        return redirect('/alunos')->with('completed', 'Aluno removido com sucesso');
    }
}
