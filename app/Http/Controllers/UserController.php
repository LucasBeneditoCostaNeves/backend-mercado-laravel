<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Carts;
use App\Models\User;
use App\Services\CreateUserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(CreateUserRequest $request)
    {
        $createdUserService = new CreateUserService();
        return $createdUserService->create($request->all());
    }

    public function capturing()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function createCart(Request $request)
    {
        $id = auth()->user()->id;
        $number = Carts::all()->last();

        $data = [
            "id" => $number["id"] + 1,
            "name" => $request["name"],
            "price" => $request["price"],
            "image" => $request["image"],
            "category" => $request["category"],
            "user_id" => $id,
        ];

        return Carts::create($data);
    }

    public function capturingCart()
    {
        $id = auth()->user()->id;
        $products = Carts::all();
        foreach ($products as &$product) {
            $product['image'] = stripslashes($product['image']); // Remover as barras invertidas extras
            $product['image'] = str_replace('\\/', '/', $product['image']); // Substituir a barra invertida escapada por apenas a barra
        }

        // Agora o array $products foi atualizado com as URLs de imagem corretas
        return response()->json($products, 200, [], JSON_UNESCAPED_SLASHES);
    }

    public function deleteCart(Request $request)
    {
        $name = $request["name"];
        $cart = Carts::where('name', $name)->first();

        if ($cart) {
            $cart->delete();
            return response()->json(['message' => 'Cart deleted successfully']);
        } else {
            return response()->json(['message' => 'Cart not found'], 404);
        }
    }
}
