<?php

    namespace App\Controllers;

    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;
    use App\DAO\MySQL\CodeeasyGerenciadorDeLojas\ProdutosDAO;
    

    final class ProdutoController{
        
        public function getProdutos(Request $request, Response $response, array $args): Response{
           
            $produtosDAO = new ProdutosDAO();
            $produtos = $produtosDAO->getAllProdutos();
            $response = $response->withJson($produtos);

            return $response;

        }

        public function insertProduto(Request $request, Response $response, array $args): Response{
           
            return $response;

        }

        public function updateProduto(Request $request, Response $response, array $args): Response{
           
            return $response;

        }

          public function deleteProduto(Request $request, Response $response, array $args): Response{
           
            return $response;

        }

        
    }