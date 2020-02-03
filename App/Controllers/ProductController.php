<?php

    namespace App\Controllers;

    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;
    use App\DAO\Mysql\CodeeasyGerenciadorDeLojas\LojasDAO;

    final class ProductController{
        
        public function getProducts(Request $request, Response $response, array $args): Response{
            $response = $response->withJson([
                "message" => "Hello world"
            ]);

            $lojaDAO = new LojasDAO();
            $lojaDAO->teste();

            return $response;
        }
    }