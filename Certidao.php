<?php

abstract class Certidao implements Registro
{
  
    protected $numeroRegistro;
    protected $nomeObjetos;
    protected $nomeDeclarantes;
    protected $tipo;
    protected $dataEmissao;
    protected $nomeTabeliao;
    protected $nomeCartorio;
    protected $registrado;


    public function setNomeObjetos($nomeObjeto)
    {
        $this->nomeObjetos[] = $nomeObjeto;
    }

    public function getNomeObjetos()
    {
        foreach ($this->nomeObjetos as $nome)
        {
            echo $nome . '<br>';
        }
    }


    public function setNomeDeclarantes($nomeDeclarante)
    {
        $this->nomeDeclarantes[] = $nomeDeclarante;
    }

    public function getNomeDeclarantes()
    {
        foreach ($this->nomeDeclarantes as $nome)
        {
            echo $nome . '<br>';
        }
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao= $dataEmissao;
    }

    public function getDataEmissao()
    {
       return $this->dataEmissao;
    }

    public function getNumeroRegistro()
    {
       return $this->numeroRegistro;
    }

    public function getNomeTabeliao()
    {
       return $this->nomeTabeliao;
    }

    public function getNomeCartorio()
    {
       return $this->nomeCartorio;
    }
    
    public function getRegistrado()
    {
        return $this->registrado;
    }
}