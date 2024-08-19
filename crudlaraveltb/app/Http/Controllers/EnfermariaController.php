<?php

namespace App\Http\Controllers;
use App\Models\Enfermaria;
use Illuminate\Http\Request;

class EnfermariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // select * from tb_produtos order by id desc limit 10
         $enfermaria = Enfermaria::all();
         return view('enfermaria.index', compact('enfermaria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("enfermaria.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enfermaria = new Enfermaria();
        $enfermaria->titulo = $request->title;
        $enfermaria->descricao = $request->description;
        $enfermaria->pessoas = $request->participants;
        $enfermaria->data = $request->date;
        $enfermaria->status = $request->status;
        $enfermaria->save();

        return response()->json(['message' => 'enfermaria salva com sucesso!', 'enfermaria' => $enfermaria]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
