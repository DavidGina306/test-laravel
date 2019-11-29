<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductCrudService
{
    /**
     * Funcao para Cadastrar o Produto
     *
     * @param [type] $request
     * @return void
     */
    public static function store($request)
    {
        try {
            $product = Product::create($request->all());
            return [
                'msg' => 'Sucesso Cadastrar Usuario',
                'status' => 200
            ];
        } catch (\Exception $e) {
            Log::info('Erro ao Registrar Produto');
            Log::error($e->getMessage());
            return [
                'msg' => 'Erro ao Cadastrar Usuario',
                'error' => $e->getMessage(),
                'status' => 500
            ];
        }
    }
}
