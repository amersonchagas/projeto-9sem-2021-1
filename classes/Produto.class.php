<?php
    class Produto{
        private $descricao;
        private $preco;
        private $qnt_produto;

        public function setDescricao($descricao){
            $this->descricao =  $descricao;
        }

        public function setPreco($preco){
            $this->preco =  $preco;
        }

        public function setQuantidade($qnt){
            $this->quantidade =  $qnt;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }

        public function adicionar(){
            $sql = "INSERT INTO produto(descricao, preco, quantidade) VALUES (:descricao, :preco, :quantidade)";

            $stmt = DB::conexao()->prepare($sql);
            $stmt->bindParam(':descricao', $this->descricao);
            $stmt->bindParam(':preco', $this->preco);
            $stmt->bindParam(':quantidade', $this->quantidade);
            $stmt->execute();
        }

    }
?>