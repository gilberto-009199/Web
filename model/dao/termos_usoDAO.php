<?php
    class Termos_usoDao{

        private $conex;
        // metodo construtor da classe - 
        public function __construct(){
            require_once('model/termos_usoClass.php');
            require_once('model/dao/conexaoMysql.php');
            $this->conex = new conexaoMysql();
        }

        public function insert($termos_uso){
            
            $sql = "insert into tbl_termos_uso(titulo,texto)".
               "VALUES('". $termos_uso->getTitulo() ."','". $termos_uso->getTexto() ."')";

            //Abrido conexao com o BD
            $PDO_conex = $this->conex->connect_database();

            if($PDO_conex->query($sql)){
                echo "Insert com sucesso";
            }else{
                echo "Erro no script de insert";
            }
            $this->conex->close_database();

        }
        public function delete($id){
                
            $sql = " DELETE FROM tbl_termos_uso where id = $id ";

            $PDO_conex = $this->conex->connect_database();


            if($PDO_conex->query($sql)){
                   echo "Registro deletado !";
            } else {
                    echo "Registro não encontrado!! $sql";
                    return 0;
            }

        }
        public function update($termos_uso){
        
                $sql = "UPDATE tbl_termos_uso SET titulo='" . $termos_uso->getTitulo() . "' , texto='" . $termos_uso->getTexto() . "' " . 
                " WHERE id =".$termos_uso->getId(). "";
                echo $sql;
                //Abrido conexao com o BD
                $PDO_conex = $this->conex->connect_database();

                if($PDO_conex->query($sql)){
                    echo "update com sucesso";
                } else {
                    echo "Erro no script de update";
                }

                $this->conex->close_database();
        }
        public function selectAll(){
            
            $sql = " SELECT * FROM tbl_termos_uso";
            
            $PDO_conex = $this->conex->connect_database();

            $select = $PDO_conex->query($sql);

            $listar_registros = array();

            while($rs_termos_uso = $select->fetch(PDO::FETCH_ASSOC)){
                

                $termos_uso = new Termos_uso();
                $termos_uso->setId($rs_termos_uso['id'])
                    ->setTitulo($rs_termos_uso['titulo'])
                    ->setTexto($rs_termos_uso['texto']);

                $listar_registros[] = $rs_termos_uso;
                
            }
        
            $this->conex->close_database();

            return $listar_registros;


                
        }
        public function selectById($id){
            
            $sql = " SELECT * FROM tbl_termos_uso where id = $id ";

            $PDO_conex = $this->conex->connect_database();

            $select = $PDO_conex->query($sql);

            if($rs_faq = $select->fetch(PDO::FETCH_ASSOC)){

            $termos_uso = new Termos_uso();
            $termos_uso->setId($rs_termos_uso['id'])
                        ->setTitulo($rs_termos_uso['titulo'])
                        ->setTexto($rs_termos_uso['texto']);

                return $faq;

            } else {
                    echo "Registro não encontrado!!";
                    return 0;
            }


        }

    }
?>