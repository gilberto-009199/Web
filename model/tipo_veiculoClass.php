<?php

class TipoVeiculo{


    private $id_tipo_veiculo;
    private $nome_tipo_veiculo;
    private $percentual;
    private $id_percentual;
    private $excluido;
    private $data;
    
    public function __construct(){

    }

    public function getId(){
        return $this->id_tipo_veiculo;
    }

    public function setId($id){
        $this->id_tipo_veiculo = $id;
        return $this;
    }

    public function getData($br = 0){

        if($br == 'br')return date("d/m/Y", strtotime($this->data));
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
        return $this;
    }

    public function getNome(){
        return $this->nome_tipo_veiculo;
    }

    public function setNome($nome){

        $this->nome_tipo_veiculo = $nome;
        
        return $this;
    }
    public function setIdPercentual($id_percentual){
        $this->id_percentual = $id_percentual;
        return $this;
    }
    public function getIdPercentual(){
        return $this->id_percentual;
    }
    public function getPercentual(){
        return $this->percentual;
    }

    public function setPercentual($percentual){
    
        $this->percentual = $percentual;

        return $this;
    
    }

    public function setExcluido($excluido){
        $this->excluido = $excluido;
        return $this;
    }
    public function getExcluido(){
        return $this->excluido;
    }

    public function to_json(){
        return array('id_tipo_veiculo'=>$this->id_tipo_veiculo, 'nome_tipo_veiculo'=>$this->nome_tipo_veiculo);
    }
}





?>