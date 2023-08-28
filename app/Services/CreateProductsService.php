<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Products;
use App\Models\User;



class CreateProductsService
{
    public function create()
    {
        $products = [
            [
                "id" => 22,
                "name" => "Creme Dental Colgate Total 12 Gengiva Reforçada 180g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/245/24673245.jpg",
                "price" => 15.49,
                "description" => "",
                "category" => "Higiene Pessoal",
                "created_at" => "2023-06-05T20:57:29.931Z"
            ],
            [
                "id" => 23,
                "name" => "Creme Dental Colgate Total 12 Clean Mint 3 unid 90g Preço Especial",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/751/24671751.jpg",
                "price" => 20.79,
                "description" => "",
                "category" => "Higiene Pessoal",
                "created_at" => "2023-06-05T20:58:32.690Z"
            ],
            [
                "id" => 24,
                "name" => "Creme Dental Glow Mint Colgate Luminous White Caixa 70g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/926/25088926.png",
                "price" => 19.69,
                "description" => "",
                "category" => "Higiene Pessoal",
                "created_at" => "2023-06-05T20:58:59.357Z"
            ],
            [
                "id" => 25,
                "name" => "Colgate Sensitive Pro-Alívio Imediato Branqueador Creme Dental para dentes sensíveis 90g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/217/24953217.jpg",
                "price" => 10.99,
                "description" => "",
                "category" => "Higiene Pessoal",
                "created_at" => "2023-06-05T20:59:45.524Z"
            ],
            [
                "id" => 26,
                "name" => "Enxaguante Bucal Zero Álcool Colgate Plax Odor Control Frasco Leve 750ml Pague 500ml",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/331/24941331.png",
                "price" => 10.99,
                "description" => "",
                "category" => "Higiene Pessoal",
                "created_at" => "2023-06-05T21:00:17.736Z"
            ],
            [
                "id" => 27,
                "name" => "Creme Dental Carvão Ativado Colgate Total 12 Caixa 90g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/291/24941291.png",
                "price" => 7.99,
                "description" => "",
                "category" => "Higiene Pessoal",
                "created_at" => "2023-06-05T21:01:04.560Z"
            ],
            [
                "id" => 28,
                "name" => "Tomate Italiano 500g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/107/12812107.jpg",
                "price" => 5.99,
                "description" => "",
                "category" => "Hortifruti",
                "created_at" => "2023-06-05T21:04:25.353Z"
            ],
            [
                "id" => 31,
                "name" => "Cebola A Granel 500g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/624/13421624.PNG",
                "price" => 3.88,
                "description" => "",
                "category" => "Hortifruti",
                "created_at" => "2023-06-05T21:06:06.663Z"
            ],
            [
                "id" => 41,
                "name" => "Batata Frita Lisa Clássica Lays Pacote 80G",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/776/23685776.jpg",
                "price" => 10.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:17:19.839Z"
            ],
            [
                "id" => 42,
                "name" => "Palitinho De Trigo Salgado Elma Chips Stiksy 120G",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/864/23685864.jpg",
                "price" => 7.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:17:46.942Z"
            ],
            [
                "id" => 10,
                "name" => "Refrigerante Cola Zero Açúcar Pepsi Black Garrafa 1,5l",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/969/25091969.png",
                "price" => 4.99,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:46:48.765Z"
            ],
            [
                "id" => 40,
                "name" => "Salgadinho de Milho Queijo Nacho Doritos Pacote 140g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/249/23682249.jpg",
                "price" => 8.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:16:19.595Z"
            ],
            [
                "id" => 43,
                "name" => "Achocolatado em Pó NESCAU 370g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/879/24710879.jpg",
                "price" => 18.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:18:12.556Z"
            ],
            [
                "id" => 44,
                "name" => "Caixa Sonho de Valsa e Ouro Branco Sortidos 220g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/955/25095955.png",
                "price" => 16.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:18:58.841Z"
            ],
            [
                "id" => 35,
                "name" => "Vanish Crystal White Oxi Action 400g Refil Econômico para roupas brancas",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/250/20233250.jpg",
                "price" => 23.75,
                "description" => "",
                "category" => "Limpeza",
                "created_at" => "2023-06-05T21:11:45.020Z"
            ],
            [
                "id" => 45,
                "name" => "Barra de Proteína Vegana Cacau Fit Pacote 40g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/966/22475966.jpg",
                "price" => 14.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:19:38.512Z"
            ],
            [
                "id" => 8,
                "name" => "Refrigerante Zero Açúcar Pepsi Black Garrafa 200ml",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/231/13494231.jpeg?im=Resize,width=200",
                "price" => 4.99,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:45:25.132Z"
            ],
            [
                "id" => 9,
                "name" => "Refrigerante PEPSI Zero Garrafa 2L",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/248/12906248.jpg",
                "price" => 6.99,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:46:08.721Z"
            ],
            [
                "id" => 11,
                "name" => "Energético Monster Energy Ultra White Sem Açúcar 473ml",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/292/24915292.jpg",
                "price" => 7.59,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:48:15.648Z"
            ],
            [
                "id" => 20,
                "name" => "Refrigerante Clash'D Frutas Vermelhas 269ml",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/851/25184851.jpg",
                "price" => 3.59,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:54:11.021Z"
            ],
            [
                "id" => 21,
                "name" => "Refrigerante ITUBAÍNA Retrô Sabor Tutti Frutti 355ml",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/860/20900860.png",
                "price" => 6.89,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 34,
                "name" => "Vanish Multi Power Oxi Action 400g Refil Econômico para roupas coloridas",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/7/21754007.jpg",
                "price" => 21.89,
                "description" => "",
                "category" => "Limpeza",
                "created_at" => "2023-06-05T21:11:07.074Z"
            ],
            [
                "id" => 36,
                "name" => "Gel Vanish Multiuso 1,5L para roupas coloridas",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/828/25142828.jpg",
                "price" => 33.75,
                "description" => "",
                "category" => "Limpeza",
                "created_at" => "2023-06-05T21:12:29.374Z"
            ],
            [
                "id" => 37,
                "name" => "Vanish 75g para roupas coloridas",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/777/25142777.jpg",
                "price" => 10.49,
                "description" => "",
                "category" => "Limpeza",
                "created_at" => "2023-06-05T21:13:21.085Z"
            ],
            [
                "id" => 38,
                "name" => "Vanish Multi Power Oxi Action 450g para roupas coloridas",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/860/20232860.jpg",
                "price" => 36.49,
                "description" => "",
                "category" => "Limpeza",
                "created_at" => "2023-06-05T21:13:48.798Z"
            ],
            [
                "id" => 39,
                "name" => "Vanish Resolv 450ml para roupas coloridas",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/654/609654.jpg",
                "price" => 24.79,
                "description" => "",
                "category" => "Limpeza",
                "created_at" => "2023-06-05T21:14:25.818Z"
            ],
            [
                "id" => 12,
                "name" => "Linguiça de Pernil Prieto 500g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/717/19204717.jpg",
                "price" => 14.79,
                "description" => "",
                "category" => "Frios",
                "created_at" => "2023-06-05T20:49:03.165Z"
            ],
            [
                "id" => 13,
                "name" => "Linguiça de Pernil com Alho Prieto 500g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/284/18968284.jpg",
                "price" => 18.49,
                "description" => "",
                "category" => "Frios",
                "created_at" => "2023-06-05T20:49:33.580Z"
            ],
            [
                "id" => 17,
                "name" => "Espetinho Peito de Frango Temperado e Congelado QUALITÁ 400g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/616/23929616.png",
                "price" => 23.99,
                "description" => "",
                "category" => "Frios",
                "created_at" => "2023-06-05T20:51:52.160Z"
            ],
            [
                "id" => 14,
                "name" => "Linguiça de Frango Prieto 500g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/209/19205209.jpg",
                "price" => 19.99,
                "description" => "",
                "category" => "Frios",
                "created_at" => "2023-06-05T20:50:32.472Z"
            ],
            [
                "id" => 15,
                "name" => "Linguiça Calabresa Prieto 500g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/300/19205300.jpg",
                "price" => 23.99,
                "description" => "",
                "category" => "Frios",
                "created_at" => "2023-06-05T20:50:59.279Z"
            ],
            [
                "id" => 16,
                "name" => "Espetinho de Carne Bovina Temperado e Congelado QUALITÁ 400g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/615/23929615.png",
                "price" => 33.99,
                "description" => "",
                "category" => "Frios",
                "created_at" => "2023-06-05T20:51:25.105Z"
            ],
            [
                "id" => 18,
                "name" => "Espetinho Linguiça Mista Temperado e Congelado QUALITÁ 400g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/618/23929618.png",
                "price" => 20.99,
                "description" => "",
                "category" => "Frios",
                "created_at" => "2023-06-05T20:52:17.439Z"
            ],
            [
                "id" => 19,
                "name" => "Espeto Kafta QUALITÀ Caixa 400g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/380/23930380.png",
                "price" => 22.99,
                "description" => "",
                "category" => "Frios",
                "created_at" => "2023-06-05T20:52:37.732Z"
            ],
            [
                "id" => 29,
                "name" => "Alho 100g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/537/13421537.PNG",
                "price" => 3.99,
                "description" => "",
                "category" => "Hortifruti",
                "created_at" => "2023-06-05T21:05:13.011Z"
            ],
            [
                "id" => 30,
                "name" => "Banana Prata 600g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/143/12810143.jpg",
                "price" => 7.99,
                "description" => "",
                "category" => "Hortifruti",
                "created_at" => "2023-06-05T21:05:37.983Z"
            ],
            [
                "id" => 32,
                "name" => "Batata Doce Rosada 400g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/806/22649806.jpg",
                "price" => 2.99,
                "description" => "",
                "category" => "Hortifruti",
                "created_at" => "2023-06-05T21:06:46.715Z"
            ],
            [
                "id" => 33,
                "name" => "Mandioquinha (Batata Baroa) a Granel 300g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/887/22396887.jpg",
                "price" => 5.99,
                "description" => "",
                "category" => "Hortifruti",
                "created_at" => "2023-06-05T21:07:21.212Z"
            ]
        ];

        for ($i = 0; $i <= count($products); $i++) {
            $name = $products[$i]['name'];

            $verify = Products::where('name', $name)->first();

            if (!$verify) {
                Products::create($products[$i]);
            }
        }
        return "funcionou";
    }
}
