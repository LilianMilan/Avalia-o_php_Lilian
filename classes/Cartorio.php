<?php

class cartorio implements emitir
{
    private $lista;

    public function adicionarContrato(Contrato $contrato)
    {
        $this->lista[] = $contrato;
    }

    public function emitirTudo()
    {
        foreach($this->lista as $emite) {
            $emite->emitir();
       }
    }






}