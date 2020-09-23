<?php

require_once 'classes/Cartorio.php';
require_once 'classes/Certidao.php';
require_once 'classes/Contrato.php';
require_once 'classes/Emitir.php';
require_once 'classes/TipoCertidao.php';
require_once 'classes/TipoContrato.php';


$c1 = new Certidao('Camila', 'Danilo', 'N', '20/02/20', 'Laura', 'Judas perdeu as botas');
echo $c1->getDetalheCertidao();
echo '<hr>';

$c2 = new Contrato('Rita', 'Mauricio', 'Trabalho', '20/02/20', '21/02/20', 'Laura', 'Judas perdeu as botas');
echo $c2->getDetalheContrato();
echo '<hr>';


