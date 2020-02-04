<?php

    namespace App\DAO\MySQL\CodeeasyGerenciadorDeLojas;

    class ProdutosDAO extends Conexao {

        public function __construct() {
            
            parent::__construct();

        }

        public function getAllProdutos(): array{

            $produtos = $this->pdo
                ->query('SELECT 
                    id,
                    loja_id,
                    nome,
                    preco,
                    quantidade
                FROM produtos;')
                ->fetchAll(\PDO::FETCH_ASSOC);

            return $produtos;
        }
    }