<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{

    public function buscar($cep)
    {
        // Simulação de busca de endereço com base no CEP
        $endereco = [
            'cep' => $cep,
            'logradouro' => 'Rua Exemplo',
            'bairro' => 'Bairro Exemplo',
            'cidade' => 'Cidade Exemplo',
            'uf' => 'UF'
        ];

        // Retorna a resposta em formato JSON (caso você deseje exibir como JSON)
        return response()->json($endereco);
    }
}
