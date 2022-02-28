<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViaCepController extends Controller
{
    public function index()
    {
        return view('viacep.cep.consultar');
    }

    public function logadouro()
    {
        return view('viacep.logadouro.consultar');
    }

    public function automatico()
    {
        return view('viacep.automatico.index');
    }

    /**
     * Responsável por consultar CEP no viacep.
     */
    public function consultarCEP(Request $request)
    {
        //Inicia Curl
        $curl = curl_init();

        //Configurações do curl
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://viacep.com.br/ws/{$request->cep}/json/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);

        //Response
        $response = curl_exec($curl);

        //fecha a conexão
        curl_close($curl);

        //Converte json para array
        $array = json_decode($response, true);

        return view('viacep.cep.show', compact('array'));
    }

    public function consultarLogadouro(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://viacep.com.br/ws/{$request->uf}/{$request->cidade}/{$request->logadouro}/json/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        $array = json_decode($response, true);

        return view('viacep.logadouro.show', compact('array'));
    }
}
