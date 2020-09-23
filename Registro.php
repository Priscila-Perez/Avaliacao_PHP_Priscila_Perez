<?php

interface Registro
{

    public function registrarCertidao(Certidao $certidao, $nomeTabeliao, $nomeCartorio, $numeroRegistro);
    public function registrarContrato(Contrato $contrato, $nomeTabeliao, $nomeCartorio, $numeroRegistro);
  
}