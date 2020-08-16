<?php
/**
 * Este exemplo mostra como usar o WebService do Correios para calcular o d�gito verificador de uma etiqueta
 * 
 * Porem, se preferir voc� pode usar o m�todo {@linnk \PhpSigep\Model\Etiqueta::getDv() } para calcular o d�gito
 * verificador, visto que esse m�todo � mais r�dido pois faz o c�lculo local sem precisar se comunicar com o WebService.
 * 
 */

require_once __DIR__ . '/bootstrap-exemplos.php';

$etiquetaSemDv_1 = new \PhpSigep\Model\Etiqueta();
$etiquetaSemDv_1->setEtiquetaSemDv('SW99266328BR');

$etiquetaSemDv_2 = new \PhpSigep\Model\Etiqueta();
$etiquetaSemDv_2->setEtiquetaSemDv('PD73958096BR');


$params = new \PhpSigep\Model\GeraDigitoVerificadorEtiquetas();
$params->setAccessData(new \PhpSigep\Model\AccessDataHomologacao());
$params->setEtiquetas(array($etiquetaSemDv_1, $etiquetaSemDv_2));

$phpSigep = new PhpSigep\Services\SoapClient\Real();
$result = $phpSigep->geraDigitoVerificadorEtiquetas($params);

/** @var $etiquetasComDv \PhpSigep\Model\Etiqueta[] */
$etiquetasComDv = $result->getResult();
foreach ($etiquetasComDv as $etiqueta) {
    echo '<strong>Etiqueta ' . $etiqueta->getEtiquetaSemDv() . '</strong> -> DV: ' . $etiqueta->getDv() . ' -> ' .
        ' Etiqueta j� com DV: ' . $etiqueta->getEtiquetaComDv() . '<br>';
}

echo '<hr>';
echo 'Resultado completo';
echo '<pre>';
print_r((array)$result);
echo '</pre>';
