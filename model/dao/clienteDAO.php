<?php

    class ClienteDAO{
        
        private $conex;

        public function __construct(){
            require_once('model/clienteClass.php');
            require_once('model/dao/conexaoMysql.php');
            $this->conex = new  conexaoMysql();
        }

        public function insert($cliente){

            $senha = $cliente->genSenha();

            $sql =  "INSERT INTO tbl_cliente(nome_cliente,cpf,telefone,celular,cnh_foto,foto_cliente,rua,bairro,cep,complemento,cidade,uf,email,senha)".
                    "VALUES('". $cliente->getNome() ."',". $cliente->getCPF() .",". $cliente->getTelefone() .",". $cliente->getCelular() .",".
                    " '". $cliente->getCNHFoto() ."','". $cliente->getFoto() ."','". $cliente->getRua() ."','". $cliente->getBairro() ."',". $cliente->getCEP() .",".
                    " '" . $cliente->getComplemento() . "','". $cliente->getCidade() ."','". $cliente->getUF() ."','". $cliente->getEmail() ."','". $senha ."')";
            
             //Abrido conexao com o BD
            $PDO_conex = $this->conex->connect_database();
            

            if($PDO_conex->query($sql)){
                echo "inserido com sucesso";

                // PEGANDO O ID do Ultimo Registro inserido
                $id_cliente = $PDO_conex->lastInsertId();
                
                // Retornando o cliente inserido para a acontroller colocar na session
                return $cliente->setId($id_cliente)
                               ->setSenha($senha);

            } else {
                echo "Erro no script de insert";
                // Retornando false para que a controller saiba que o ussuario não foi inserido
                return false;
            }

        }

        public function delete($id){

        }
        public function update($cliente){

        }
        public function selectAll(){

        }
        public function select($id){

        }
        
        // Pega o usuario baseado no email
        public function getByEmail($email){

            $sql = "SELECT * FROM tbl_cliente WHERE email ='". $email ."' ";

            $PDO_conex = $this->conex->connect_database();

            $select = $PDO_conex->query($sql);

            // PEGANDO O Cliente Correspondente
            if($rs_cliente = $select->fetch(PDO::FETCH_ASSOC)){

                $cliente = new Cliente();
                
                // Montando o cliente com os dados do banco

                $cliente->setId($rs_cliente['id_cliente'])
                        ->setNome($rs_cliente['nome_cliente'])
                        ->setCPF($rs_cliente['cpf'])
                        ->setTelefone($rs_cliente['telefone'])
                        ->setCelular($rs_cliente['celular'])
                        ->setEmail($rs_cliente['email'])
                        ->setSenha($rs_cliente['senha'])
                        ->setCEP($rs_cliente['cep'])
                        ->setComplemento($rs_cliente['complemento'])
                        ->setRua($rs_cliente['rua'])
                        ->setBairro($rs_cliente['bairro'])
                        ->setCidade($rs_cliente['cidade'])
                        ->setUF($rs_cliente['uf'])
                        ->setFoto($rs_cliente['foto_cliente'])
                        ->setCNHFoto($rs_cliente['cnh_foto']);
                
                // Retorna o cliente para que o controller possa verificar a senha e guardar na session
                return $cliente;


            } else {
                    echo "Usuario não encontrado!!";
                    return false;
            }
        }

    }

?>