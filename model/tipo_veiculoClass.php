<?php

class TipoVeiculo{


    private $id_tipo_veiculo;
    private $nome_tipo_veiculo;
    private $percentual;
    
    public function __construct(){

    }

    public function getId(){
        return $this->id_tipo_veiculo;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getNome(){
        return $this->nome_tipo_veiculo;
    }

    public function setNome($nome){

        $this->nome_tipo_veiculo = $nome;
        
        return $this;
    }
    
    public function getPercentual(){
        return $this->percentual;
    }

    public function setPercentual($percentual){
    
        $this->percentual = $percentual;

        return $this;
    
    }
}





?>