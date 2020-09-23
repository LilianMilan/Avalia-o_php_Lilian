<?php

 class certidao 
{
    private static $contador;
    protected $numeroRegistro;
    protected $nome;
    protected $nomeDeclarante;
    protected $tipoCertidao;
    protected $dataEmissao;
    protected $nomeTabeliao;
    protected $nomeCartorio;
    const TIPOCERTIDOES = ['N' => 'Nascimento', 'C' => 'Casado', 'O' => 'Obito', 'P' => 'Propriedade'];

    public function __construct ($nome, $nomeDeclarante,$tipoCertidao, $dataEmissao, $nomeTabeliao, $nomeCartorio)
    {
        self::$contador ++;
        $this->numeroRegistro = self::$contador;
        $this->nome = $nome;
        $this->nomeDeclarante = $nomeDeclarante;
        $this->tipoCertidao = self::TIPOCERTIDOES;
        $this->dataEmissao = $dataEmissao;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
    }



    public function getDetalheCertidao()
    {
        return "Numero do Registro: $this->numeroRegistro<br> 
        Nome da pessoa: $this->nome<br>
        Nome do Declarante: $this->nomeDeclarante<br>
        Tipo da Certidão: $this->tipoCertidao<br>
        Data de Emissão do documento: $this->dataEmissao<br>
        Nome do tabelião: $this->nomeTabeliao<br>
        Nome do Cartorio: $this->nomeCartorio";
    }
    
    public function getTipoCertidoes() 
    {
        return self::TIPOCERTIDOES[$this->tipoCertidao];
    }


    public function getNumeroRegistro()
    {
        return $this->numeroRegistro;
    }

    public function setNumeroRegistro($numeroRegistro)
    {
        $this->numeroRegistro = $numeroRegistro;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNomeDeclarante()
    {
        return $this->nomeDeclarante;
    }

    public function setNomeDeclarante($nomeDeclarante)
    {
        $this->nomeDeclarante = $nomeDeclarante;
    }

    public function getTipoCertidao()
    {
        return $this->tipoCertidao;
    }

    public function setTipoCertidao($tipoCertidao)
    {
        $this->tipoCertidao = $tipoCertidao;
    }

    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

    public function getNomeTabeliao()
    {
        return $this->nomeTabeliao;
    }
 
    public function setNomeTabeliao($nomeTabeliao)
    {
        $this->nomeTabeliao = $nomeTabeliao;
    }

    public function getNomeCartorio()
    {
        return $this->nomeCartorio;
    }
 
    public function setNomeCartorio($nomeCartorio)
    {
        $this->nomeCartorio = $nomeCartorio;
    }
}
