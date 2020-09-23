<?php

abstract class Contrato implements Registro
{
    // ◦ Número de Registro do Contrato;
    // ◦ Nome das partes envolvidas;
    // ◦ Nomes das Testemunhas (pelo menos duas);
    // ◦ Objeto do contrato (Compra e Venda, Trabalho, etc);
    // ◦ Data de emissão do contrato;
    // ◦ Data de registro do contrato;
    // ◦ Nome do Tabelião responsável pela autenticação do documento;
    // ◦ Nome do Cartório onde o documento foi lavrado.
    protected $numeroRegistro;
    protected $nomePartes;
    protected $nomeTestemunhas;
    protected $objeto;
    protected $dataEmissao;
    protected $dataRegistro;
    protected $nomeTabeliao;
    protected $nomeCartorio;
    protected $registrado;

    public function setNomePartes($nomeParte)
    {
        $this->nomePartes[] = $nomeParte;
    }

    public function getNomePartes()
    {
        foreach ($this->nomePartes as $nome)
        {
            echo $nome . '<br>';
        }
    }


    public function setNomeTestemunhas($nomeTestemunha)
    {
        $this->nomeTestemunhas[] = $nomeTestemunha;
    }

    public function getNomeTestemunhas()
    {
        foreach ($this->nomeTestemunhas as $nome)
        {
            echo $nome . '<br>';
        }
    }

    public function setObjeto($objeto)
    {
        $this->objeto = $objeto;
    }

    public function getObjeto()
    {
        return $this->objeto;
    }

    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao= $dataEmissao;
    }

    public function getDataEmissao()
    {
       return $this->dataEmissao;
    }

    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;
    }

    public function getDataRegistro()
    {
       return $this->dataRegistro;
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