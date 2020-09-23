<?php

class Registrado
{
    private $certidoes;
    private $contratos;
    private $totalCertidoes;
    private $totalContratos;

    public function adicionarCertidao(Certidao $certidao)
    {
        $this->certidoes[] = $certidao;
    }

    public function getCertidoes()
    {
        foreach($this->certidoes as $certidao)
        {
            echo $certidao->getTipo() . '<br>';
        }
    }

    public function totalCertidoes()
    {
        foreach ($this->certidoes as $certidao)
        {
            $this->totalCertidoes += 1;
        }
        return $this->totalCertidoes;
    }

    public function adicionarContrato(Contrato $contrato)
    {
        $this->contratos[] = $contrato;
    }

    public function getContratos()
    {
        foreach($this->contratos as $contrato)
        {
            echo $contrato->getObjeto() .'<br>';
        }
    }

    public function totalContratos()
    {
        foreach ($this->contratos as $contrato)
        {
            $this->totalContratos +=1;
        }
        return $this->totalContratos;
    }
}