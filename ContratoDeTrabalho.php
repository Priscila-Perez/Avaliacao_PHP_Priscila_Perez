<?php

class ContratoDeTrabalho extends Contrato
{
    public function registrarContrato(Contrato $contrato, $nomeTabeliao, $nomeCartorio, $numeroRegistro)
    {
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
        if(!is_numeric($numeroRegistro)){
            echo 'Registro inválido! Insira apenas números';
        } else {
            $this->numeroRegistro = $numeroRegistro;   
        }
    }

}