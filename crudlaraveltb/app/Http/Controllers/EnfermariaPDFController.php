<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Enfermaria;


class EnfermariaPDFController extends Controller
{
    
    public function gerarPDF (Request $request){
        
        $enfermarias = Enfermaria::orderBy("id", "desc")->get();
        
        $dados = [
            "title" => "Este é o PDF",
            "enfermarias" => $enfermarias,
            "data" => date('d/m/Y')
        ];
        
        if($request->has('download'))
        {
            
            $pdf = Pdf::loadView('enfermaria.relatorio', $dados);
            return $pdf->download('enfermarias_pdf_exemplo.pdf');
        }
        
        
        
    }
    
    
}
