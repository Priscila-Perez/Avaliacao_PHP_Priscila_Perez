<?php

class Nascimento extends Certidao
{
    public function registrarCertidao(Certidao $certidao, $nomeTabeliao, $nomeCartorio, $numeroRegistro)
    {
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
        if(!is_numeric($numeroRegistro)){
            echo 'Registro inválido! Insira apenas números';
        } else {
            $this->numeroRegistro = $numeroRegistro;   
        }
        
        return $this->registrado = true;
    }

}
