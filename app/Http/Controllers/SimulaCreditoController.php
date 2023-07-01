<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulaCreditoController extends Controller
{
    public function index(){
        return view('simula_credito.index');
    }

    public function store(Request $request){
        $url = "https://dev.gosat.org/api/v1/simulacao/oferta"; 
        $json = array
        (
            'cpf' => $request->cpf,
            'instituicao_id' => $request->instituicao_id,
            'codModalidade' => $request->codModalidade
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
        //dump($json_response);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ( $status != 200 ) {
            die("Erro: Falha ao acessar a URL: $url Status: $status, resposta $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        curl_close($curl);

        $response = json_decode($json_response, true);

        $QntParcelaMin = $response['QntParcelaMin'];
        $QntParcelaMax = $response['QntParcelaMax'];
        $valorMin = $response['valorMin'];
        $valorMax = $response['valorMax'];
        $jurosMes = $response['jurosMes'];
        
        return view('simula_credito.simula', 
            [
                'QntParcelaMin' => $QntParcelaMin,
                'QntParcelaMax' => $QntParcelaMax,
                'valorMin' => $valorMin,
                'valorMax' => $valorMax,
                'jurosMes' => $jurosMes,
            ]);
    }
}
