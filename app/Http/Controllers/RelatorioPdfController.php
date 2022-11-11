<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use PDF;


class RelatorioPdfController extends Controller
{

    public function index()
    {

        ini_set('max_execution_time', '300');

        return view('relatoriopdf');
    }
    public function imagem64(Request $request)
    {
        $imagem = $request['base64img'];
        ini_set('max_execution_time', '300');
        $pdf = PDF::loadView('pdf', compact('imagem'))->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            "isPhpEnabled" => true,
            'defaultFont' => 'arial',
            "enable_javascript" => true,
            'isJavascriptEnabled' => TRUE
        ]);
        $pdf->set_paper('A4', 'landscape');
        $pdf->render();

        // header('Content-type: application/pdf');
        return $pdf->stream();
    }

    public function charts()
    {

        return view('charts');
    }

    public function pdf($imagem)
    {
        
    }
}
