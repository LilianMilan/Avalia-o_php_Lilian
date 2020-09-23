<?php

class contrato
{
    private static $contador;
    protected $numeroRegistro;
    protected $nomeEnvolvido;
    protected $nomeTestemunha;
    protected $objetoContrato;
    protected $dataEmissao;
    protected $dataRegistro;
    protected $nomeTabeliao;
    protected $nomeCartorio;

    public function __construct($nomeEnvolvido, $nomeTestemunha, $objetoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio)
    {
        self::$contador ++;
        $this->numeroRegistro = self::$contador;
        $this->nomeEnvolvido = $nomeEnvolvido;
        $this->nomeTestemunha = $nomeTestemunha;
        $this->objetoContrato = $objetoContrato;
        $this->dataEmissao = $dataEmissao;
        $this->dataRegistro = $dataRegistro;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
    }

    public function getDetalheContrato()
    {
        return "Numero do Registro: $this->numeroRegistro<br> 
        Nome do Envolvido: $this->nomeEnvolvido<br>
        Nome da testemunha: $this->nomeTestemunha<br>
        Objeto do Contrato: $this->objetoContrato<br>
        Data de Emissão do documento: $this->dataEmissao<br>
        Data de Registro: $this->dataRegistro<br>
        Nome do tabelião: $this->nomeTabeliao<br>
        Nome do Cartorio: $this->nomeCartorio";
    }

    public function getNomeEnvolvido()
    {
        return $this->nomeEnvolvido;
    }

    public function setNomeEnvolvido($nomeEnvolvido)
    {
        $this->nomeEnvolvido = $nomeEnvolvido;
    }
 
    public function getNomeTestemunha()
    {
        return $this->nomeTestemunha;
    }

    public function setNomeTestemunha($nomeTestemunha)
    {
        $this->nomeTestemunha = $nomeTestemunha;
    }

    public function getObjetoContrato()
    {
        return $this->objetoContrato;
    }

    public function setObjetoContrato($objetoContrato)
    {
        $this->objetoContrato = $objetoContrato;
    }

    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }

    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;
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