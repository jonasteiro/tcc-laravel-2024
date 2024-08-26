<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ocorrencias;



class OcorrenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // select * from tb_produtos order by id desc limit 10
    $ocorrencias = Ocorrencias::all();
    return view('ocorrencias.index', compact('ocorrencias'));
    }
    //Função Filtro
    public function filtro($turma)
    {
    $ocorrencias = Ocorrencias::where('turma', $turma)->get();
    return view('ocorrencias.partials.list', compact('ocorrencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ocorrencias.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ocorrencia = new Ocorrencias();
        $ocorrencia->titulo = $request->titulo;
        $ocorrencia->descricao = $request->descricao;
        $ocorrencia->participantes = $request->participantes;
        $ocorrencia->turma = $request->turma;
        $ocorrencia->data = $request->data;
        $ocorrencia->status = $request->status;
        $ocorrencia->save();
        return response()->json(['message' => 'Ocorrencia salva com sucesso!', 'id' =>$ocorrencia->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ocorrencias = Ocorrencias::findOrFail($id);
        return view("ocorrencias.show", compact("ocorrencias"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ocorrencias = Ocorrencias::findOrFail($id);
        return response()->json($ocorrencias);
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
        $ocorrencia = Ocorrencias::findOrFail($id);
        $ocorrencia->titulo = $request->titulo;
        $ocorrencia->descricao = $request->descricao;
        $ocorrencia->participantes = $request->participantes;
        $ocorrencia->turma = $request->turma;
        $ocorrencia->data = $request->data;
        $ocorrencia->status = $request->status;
        $ocorrencia->save();

        return response()->json(['message' => 'Ocorrencia atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ocorrencias = Ocorrencias::findOrFail($id);
        $ocorrencias->delete();
        return response()->json(['message' => 'Ocorrencia excluído com sucesso!']);
    }


       //Função Graficos Ocorrências
       public function showMonthlyChartOco(Request $request)
       {
           $turmas = $request->input('turmas', []);
           
           // Filtrar atendimentos por turma se as turmas estiverem definidas
           $query = Ocorrencias::query();
           
           if ($turmas) {
               $query->whereIn('turma', $turmas);
           }
           
           $data = $query->selectRaw('DATE_FORMAT(data, "%Y-%m") as month, turma, COUNT(*) as total')
                         ->groupBy('month', 'turma')
                         ->get();
           
           return view('layouts.partials.graficosOco', compact('data'));
       }
}