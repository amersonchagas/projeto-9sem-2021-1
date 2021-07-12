<?php
    class Cliente{
        private $nome;
        private $email;

        public function __construct($id = false){
            if($id){
                $sql = "SELECT * FROM cliente where id = :id";
                $stmt = DB::conexao()->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                
                foreach($stmt as $registro){
                    $this->setId($registro['id']);
                    $this->setNome($registro['nome']);
                    $this->setEmail($registro['email']);
                }
            }
        }

        public function setId($id){
            $this->id =  $id;
        }


        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public static function listar(){
            $sql = "SELECT * FROM cliente";

            try{
                $stmt = DB::conexao()->prepare($sql);
                $stmt->execute();       
                $registros = $stmt->fetchAll();            
                if($registros){
                    $itens = array();
                    foreach($registros as $registro){                
                        $temporario = new Cliente();
                        $temporario->setId($registro['id']);
                        $temporario->setNome($registro['nome']);  
                        $temporario->setEmail($registro['email']);                    
                        $itens[] = $temporario;
                    }    
                    return $itens;
                }
                return false;

            }catch(PDOException $e){
                echo "Erro no Método Listar: ".$e->getMessage();
            }

        }

        public function adicionar(){
            
            $sql = "INSERT INTO cliente (nome, email) VALUES (:nome, :email)";
            
            try{
                $stmt = DB::conexao()->prepare($sql);
                $stmt->bindParam(':nome', $this->nome);
                $stmt->bindParam(':email', $this->email);
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro no Método Adicionar: ".$e->getMessage();
            }
        }

        public function atualizar(){
            if($this->id){
                $sql = "UPDATE cliente SET
                            nome = :nome,
                            email = :email
                        WHERE id = :id";
                try{
                    $stmt = DB::conexao()->prepare($sql);
                    $stmt->bindParam(':nome', $this->nome);
                    $stmt->bindParam(':email', $this->email);
                    $stmt->bindParam(':id', $this->id);
                    $stmt->execute();       
                }catch(PDOException $e){
                    echo "Erro no Método Atualizar: ".$e->getMessage();
                }      
            }    
        }

        public function excluir(){
            if($this->id){
                $sql = "DELETE FROM cliente where id = :id";
                try{
                    $stmt = DB::conexao()->prepare($sql);
                    $stmt->bindParam(':id', $this->id);
                    $stmt->execute();
                }catch(PDOException $e){
                    echo "Erro no Método Excluir: ".$e->getMessage();
                }
            }
        }


    }

?>