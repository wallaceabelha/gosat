<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\Modality;

class FinanceiraController extends Controller
{
    public function apifinanceira(Request $request){

        $intituicoes = Institution::all();
        $modalidades = Modality::all();
        
        if ($request->cpf == '111.111.111-11')
        {
            $cpf1[0]['id'] = $intituicoes[0]->id;
            $cpf1[0]['nome'] = $intituicoes[0]->nome;
            $cpf1[0]['modalidade'][0]['nome'] = $modalidades[3]->nome;
            $cpf1[0]['modalidade'][0]['cod'] = $modalidades[3]->cod;
            $cpf1[0]['modalidade'][1]['nome'] = $modalidades[4]->nome;
            $cpf1[0]['modalidade'][1]['cod'] = $modalidades[4]->cod;
            $cpf1[1]['id'] = $intituicoes[1]->id;
            $cpf1[1]['nome'] = $intituicoes[1]->nome;
            $cpf1[1]['modalidade'][0]['nome'] = $modalidades[0]->nome;
            $cpf1[1]['modalidade'][0]['cod'] = $modalidades[0]->cod;
            return response()->json([
                'instituicoes'=>$cpf1
            ]);
        } else if ($request->cpf == '123.123.123-12') {
            $cpf2[0]['id'] = $intituicoes[0]->id;
            $cpf2[0]['nome'] = $intituicoes[0]->nome;
            $cpf2[0]['modalidade'][0]['nome'] = $modalidades[3]->nome;
            $cpf2[0]['modalidade'][0]['cod'] = $modalidades[3]->cod;
            $cpf2[0]['modalidade'][1]['nome'] = $modalidades[5]->nome;
            $cpf2[0]['modalidade'][1]['cod'] = $modalidades[5]->cod;
            $cpf2[1]['id'] = $intituicoes[2]->id;
            $cpf2[1]['nome'] = $intituicoes[2]->nome;
            $cpf2[1]['modalidade'][0]['nome'] = $modalidades[6]->nome;
            $cpf2[1]['modalidade'][0]['cod'] = $modalidades[6]->cod;
            return response()->json([
                'instituicoes'=>$cpf2
            ]);
        } else if ($request->cpf == '222.222.222-22') {
            $cpf3[0]['id'] = $intituicoes[1]->id;
            $cpf3[0]['nome'] = $intituicoes[1]->nome;
            $cpf3[0]['modalidade'][0]['nome'] = $modalidades[0]->nome;
            $cpf3[0]['modalidade'][0]['cod'] = $modalidades[0]->cod;
            $cpf3[0]['modalidade'][1]['nome'] = $modalidades[1]->nome;
            $cpf3[0]['modalidade'][1]['cod'] = $modalidades[1]->cod;
            $cpf3[1]['id'] = $intituicoes[2]->id;
            $cpf3[1]['nome'] = $intituicoes[2]->nome;
            $cpf3[1]['modalidade'][0]['nome'] = $modalidades[2]->nome;
            $cpf3[1]['modalidade'][0]['cod'] = $modalidades[2]->cod;
            return response()->json([
                'instituicoes'=>$cpf3
            ]);
        } else{
            return response()->json([
                'instituicoes'=>'Desculpe: No momento não existe oferta de crédito disponível para o seu CPF.'
            ]);
        }
    }
}
