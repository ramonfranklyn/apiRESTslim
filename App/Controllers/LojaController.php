<?php

    namespace App\Controllers;

    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;
    use App\DAO\MySQL\CodeeasyGerenciadorDeLojas\LojasDAO;
    

    final class LojaController{
        
        public function getLojas(Request $request, Response $response, array $args): Response{
           
            $lojasDAO = new LojasDAO();
            $lojas = $lojasDAO->getAllLojas();
            $response = $response->withJson($lojas);
            
            return $response;

        }

        public function insertLoja(Request $request, Response $response, array $args): Response{
           
            return $response;

        }

        public function updateLoja(Request $request, Response $response, array $args): Response{
           
            return $response;

        }

          public function deleteLoja(Request $request, Response $response, array $args): Response{
           
            return $response;

        }

        
    }