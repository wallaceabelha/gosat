<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class ConsultaCreditoController extends Controller
{
    public function index(){
        return view('consulta_credito.index');
    }

    public function store(Request $request){
        $url = "https://dev.gosat.org/api/v1/simulacao/credito"; 
        // $url = "http://127.0.0.1:8000/api/financeira";
        $cpf = $request->cpf;
        $json = array
        (
            'cpf' => $request->cpf
        );

        $content = json_encode($json);  
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);
        
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ( $status != 200 ) {
            die("Erro: Falha ao acessar a URL: $url Status: $status, resposta $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        curl_close($curl);

        $response = json_decode($json_response, true);
        
        return view('consulta_credito.consulta', compact('response', 'cpf'));
    }
}
