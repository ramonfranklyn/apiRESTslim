<?php   

    namespace App\Models\MySQL\CodeeasyGereniadorDeLojas;

    final class LojaModel {

        /**
         * @var int
         */
        private $id;

        /**
         * @var string
         */
        private $nome;

        /**
         * @var string
         */
        private $telefone;

        /**
         * @var string
         */
        private $endereco;

        /**
         * @return int
         */
        public function getId(): int{
            
            return $this->id;
        }

        public function getNome(){

            return $this->nome;
        }

        public function setNome(string $nome): LojaModel{

            $this->nome = $nome;
            return $this;
        }

        public function getTelefone(){

            return $this->telefone;
        }

        public function setTelefone(string $telefone): LojaModel{

            $this->telefone = $telefone;
            return $this;
        }

        public function getEndereco(){

            return $this->endereco;
        }

        public function setEndereco(string $endereco): LojaModel{

            $this->endereco = $endereco;
            return $this;
        }

    }

