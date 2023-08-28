<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Services\CreateProductsService;

class ProductsController extends Controller
{
    public function create()
    {
        $createdUserService = new CreateProductsService();
        return $createdUserService->create();
    }
    public function capturing()
    {
        $products = Products::all();
        foreach ($products as &$product) {
            $product['image'] = stripslashes($product['image']); // Remover as barras invertidas extras
            $product['image'] = str_replace('\\/', '/', $product['image']); // Substituir a barra invertida escapada por apenas a barra
        }

        // Agora o array $products foi atualizado com as URLs de imagem corretas
        return response()->json($products, 200, [], JSON_UNESCAPED_SLASHES);
    }
}
