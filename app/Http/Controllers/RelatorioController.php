<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use PDF;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
   public function gerarRelatorio()
    {

$Pets = DB::table('pets')
->orderBy('nome')
->get();

$pdf = PDF::loadView('relatorios.Pets-pdf', ['Pets' =>$Pets]);

return $pdf->stream('Pets.pdf');
    }

}
