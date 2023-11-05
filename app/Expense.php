<?php

namespace App;


class Expense{

    public $uuid;
    public $quemPaga;
    public $mes;
    public $ano;
    public $descricao;
    public $dataCompletaDeReferencia;


    public function __construct( $quemPaga,$mes,$ano,$descricao,$dataCompletaDeReferencia){
        $this->uuid = uniqid();
        $this->quemPaga=$quemPaga;
        $this->mes=$mes;
        $this->ano=$ano;
        $this->descricao=$descricao;
        $this->dataCompletaDeReferencia=$dataCompletaDeReferencia;
    }

    public function getUuid(){
        return $this->uuid;
    } 



}
