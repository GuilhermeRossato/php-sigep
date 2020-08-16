<?php
require_once __DIR__ . '/bootstrap-exemplos.php';

$accessData = new \PhpSigep\Model\AccessDataHomologacao();

$phpSigep = new PhpSigep\Services\SoapClient\Real();
$result = $phpSigep->buscaCliente($accessData);

if (!$result->hasError()) {
    /** @var $buscaClienteResult \PhpSigep\Model\BuscaClienteResult */
    $buscaClienteResult = $result->getResult();

    // Anula as chancelas antes de imprimir o resultado, porque as chancelas n�o est�o em liguagem humana
    $servicos = $buscaClienteResult->getContratos()->cartoesPostagem->servicos;
    foreach ($servicos as &$servico) {
        $servico->servicoSigep->chancela->chancela = 'Chancelas anulada via c�digo.';
    }
}

echo '<pre>';
var_dump($result);
echo '</pre>';
