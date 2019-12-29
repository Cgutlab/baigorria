<?php

namespace App\Http\Controllers;

use App\Presentacion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ReportePDFController extends Controller
{
    public function index()
    {
        $products = Presentacion::all();

        return view('products', compact('products'));
    }

    public function pdf()
    {
        /**
         * toma en cuenta que para ver los mismos
         * datos debemos hacer la misma consulta
        **/
        $presentacion = Presentacion::all();
        $cont = 0;

        $pdf = PDF::loadView('pdf.reporte', compact('presentacion', 'cont'));
        $pdf->setPaper('A4', 'landscape');
        $fecha = date('Y-m-d');
        return $pdf->download('Listado-'.$fecha.'.pdf');
    }
}
