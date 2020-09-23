<?php

class TipoContrato extends contrato
{
    protected $compra;
    protected $venda;
    protected $prestacaoServicos;
    protected $trabalho;

    public function __construct ($compra, $venda, $prestacaoServicos, $trabalho)
    {
        parent::__construct($nomeEnvolvido, $nomeTestemunha, $objetoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio);
        
        $this->compra = $compra;
        $this->venda = $venda;
        $this->prestacaoServicos = $prestacaoServicos;
        $this->trabalho = $trabalho;
    }

 
    public function getCompra()
    {
        return $this->compra;
    }

    public function setCompra($compra)
    {
        $this->compra = $compra;
    }
 
    public function getVenda()
    {
        return $this->venda;
    }

    public function setVenda($venda)
    {
        $this->venda = $venda;
    }

    public function getPrestacaoServicos()
    {
        return $this->prestacaoServicos;
    }

    public function setPrestacaoServicos($prestacaoServicos)
    {
        $this->prestacaoServicos = $prestacaoServicos;
    }
 
    public function getTrabalho()
    {
        return $this->trabalho;
    }

    public function setTrabalho($trabalho)
    {
        $this->trabalho = $trabalho;
    }
}