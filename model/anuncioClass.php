<?php

class Anuncio{
    
    private $id_anuncio;
    private $descricao;
    private $id_cliente_locador;
    private $id_veiculo;
    private $horario_inicio;
    private $horario_termino;
    private $data_inicial;
    private $data_final;
    private $valor_hora;
    private $status_aprovado;
    private $menssagem;

    /* Objecto Veiculo */
    private $veiculo;
    private $cliente;
    private $solicitacao;

    public function setId($id_anuncio){
        $this->id_anuncio = $id_anuncio;
        return $this;
    }

    public function getId(){
        return $this->id_anuncio;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setIdClienteLocador($id_cliente_locador){
        $this->id_cliente_locador = $id_cliente_locador;
        return $this;
    }
    public function getIdClienteLocador(){
        return $this->id_cliente_locador;
    }
    public function setIdVeiculo($id_veiculo){
        $this->id_veiculo = $id_veiculo;
        return $this;
    }
    public function getIdVeiculo(){
        return $this->id_veiculo;
    }
    public function setHorarioInicio($horario_inicio){
        $this->horario_inicio = $horario_inicio;
        return $this;
    }
    public function getHorarioInicio(){
        return $this->horario_inicio;
    }
    public function setHorarioTermino($horario_termino){
        $this->horario_termino = $horario_termino;
        return $this;
    }
    public function getHorarioTermino($br = 0){
        if($br != 0)return date("d/m/Y", strtotime($this->horario_termino));
        
        return $this->horario_termino;
    }
    public function setDataInicial($data_inicial){
        if(strpos($data_inicial, '/')){
            $this->data_inicial = date('Y-m-d', strtotime($data_inicial));
        }
        elseif(strpos($data_inicial, '-')){
            $this->data_inicial = date('d/m/Y', strtotime($data_inicial));
        }
        
        return $this;
    }
    public function getDataInicial(){
        return $this->data_inicial;
    }
    public function setDataFinal($data_final){

        if(strpos($data_final, '/')){
            $this->data_final = date('Y-m-d', strtotime($data_final));
        }
        elseif(strpos($data_final, '-')){
            $this->data_final = date('d/m/Y', strtotime($data_final));
        }
        return $this;
    }

    public function setMenssagem($menssagem){
        $this->menssagem = $menssagem;
        return $this;
    }

    public function getMenssagem(){
        return $this->menssagem;
    }

    public function getDataFinal(){
        //Retorna no padrão br 
        return $this->data_final;
    }
    public function setStatus($status_aprovado){
        $this->status_aprovado = $status_aprovado;
        return $this;
    }
    public function getStatus(){
        return $this->status_aprovado;
    }
    public function setValor($valor_hora){
        $this->valor_hora = $valor_hora;
        return $this;
    }
    public function getValor(){
        return $this->valor_hora;
    }

    /* Objetos necessarios */
    
    /* Veiculo() */
    public function setVeiculo($veiculo){
        $this->veiculo = $veiculo;
        return $this;
    }
    public function getVeiculo(){
        return $this->veiculo;
    }
    /* Cliente()  retorna o cliente que e dono do anuncio */
    public function setLocador($cliente){
        $this->cliente = $cliente;
        return $this;
    }
    public function getLocador(){
        return $this->cliente;
    }
    public function setSolicitacao($solicitacao){
        $this->solicitacao = $solicitacao;
        return $this;
    }
    public function getSolicitacao(){
        return $this->solicitacao;
    }
    /* Calcula os dias Disponiveis apartir de hoje */
    public function countDias(){
        
         $data1 = new DateTime(date('Y-m-d H:i:s'));
         
         $data2 = new DateTime($this->data_final);
        
         $intervalo = $data1->diff($data2);

         return $intervalo->format('%R%a dias');
    }
    public function to_json(){
        
        $veiculo = $this->veiculo->to_json();
        $cliente = $this->veiculo->getCliente()->to_json();
        /// KKK isso foi estralho 
        return array('id_anuncio'=>$this->id_anuncio,
                     'descricao'=>$this->descricao,
                     'id_cliente_locador'=>$this->id_cliente_locador,
                     'id_veiculo'=>$this->id_veiculo,
                     'horario_inicio'=>$this->horario_inicio,
                     'horario_termino'=>$this->horario_termino,
                     'data_inicial'=>$this->data_inicial,
                     'data_final'=>$this->data_final,
                     'valor_hora'=>$this->valor_hora,
                     'status_aprovado'=>$this->status_aprovado,
                     'cliente'=>$cliente,
                     'veiculo'=>$veiculo);
    }

}


?>