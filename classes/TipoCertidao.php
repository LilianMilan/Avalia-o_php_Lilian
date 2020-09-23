<?php

class tipoCertidao extends Certidao
{
    protected $nascimento;
    protected $casamento;
    protected $obito;
    protected $propriedade;

    public function __construct ($nascimento, $casamento, $obito, $propriedade)
    {
        parent::__construct($numeroRegistro, $nome, $nomeDeclarante, $tipoCertidao, $dataEmissao, $nomeTabeliao, $nomeCartorio);
        
        $this->nascimento = $nascimento;
        $this->casamento = $casamento;
        $this->obito = $obito;
        $this->propriedade = $propriedade;
    }


 
    public function getNascimento()
    {
        return $this->nascimento;
    }


    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    public function getCasamento()
    {
        return $this->casamento;
    }

    public function setCasamento($casamento)
    {
        $this->casamento = $casamento;
    }

    public function getObito()
    {
        return $this->obito;
    }

    public function setObito($obito)
    {
        $this->obito = $obito;
    }

    public function getPropriedade()
    {
        return $this->propriedade;
    }

    public function setPropriedade($propriedade)
    {
        $this->propriedade = $propriedade;
    }

    
}

