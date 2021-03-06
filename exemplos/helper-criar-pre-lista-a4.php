<?php
/**
 * Este script cria e retorna uma inst�ncia de {@link \PhpSigep\Model\PreListaDePostagem}
 *
 * Como existe mais de um exemplo que precisa de uma {@link \PhpSigep\Model\PreListaDePostagem}, esse script foi criado
 * para compartilhar o c�digo necess�rio para a cria��o da {@link \PhpSigep\Model\PreListaDePostagem}.
 */


// ***  DADOS DA ENCOMENDA QUE SER� DESPACHADA *** //
    $dimensao = new \PhpSigep\Model\Dimensao();
    $dimensao->setAltura(20);
    $dimensao->setLargura(20);
    $dimensao->setComprimento(20);
    $dimensao->setDiametro(0);
    $dimensao->setTipo(\PhpSigep\Model\Dimensao::TIPO_PACOTE_CAIXA);

    $destinatario = new \PhpSigep\Model\Destinatario();
    $destinatario->setNome('Google Belo Horizonte');
    $destinatario->setLogradouro('Av. Bias Fortes');
    $destinatario->setNumero('382');
    $destinatario->setComplemento('6� andar');

    $destino = new \PhpSigep\Model\DestinoNacional();
    $destino->setBairro('Lourdes');
    $destino->setCep('30170-010');
    $destino->setCidade('Belo Horizonte');
    $destino->setUf('MG');
    $destino->setNumeroNotaFiscal(1234567890);
    $destino->setNumeroPedido(1234567890);

    // Estamos criando uma etique falsa, mas em um ambiente real vo�� deve usar o m�todo
    // {@link \PhpSigep\Services\SoapClient\Real::solicitaEtiquetas() } para gerar o n�mero das etiquetas
    $etiqueta = new \PhpSigep\Model\Etiqueta();
    $etiqueta->setEtiquetaSemDv('PD73958096BR');

    $servicoAdicional = new \PhpSigep\Model\ServicoAdicional();
    $servicoAdicional->setCodigoServicoAdicional(\PhpSigep\Model\ServicoAdicional::SERVICE_REGISTRO);
    // Se n�o tiver valor declarado informar 0 (zero)
    $servicoAdicional->setCodigoServicoAdicional(\PhpSigep\Model\ServicoAdicional::SERVICE_AVISO_DE_RECEBIMENTO);

    $servicoAdicional2 = new \PhpSigep\Model\ServicoAdicional();
    $servicoAdicional2->setCodigoServicoAdicional(\PhpSigep\Model\ServicoAdicional::SERVICE_REGISTRO);
    $servicoAdicional2->setCodigoServicoAdicional(\PhpSigep\Model\ServicoAdicional::SERVICE_VALOR_DECLARADO_PAC);
    $servicoAdicional2->setValorDeclarado(100);

    $encomenda = new \PhpSigep\Model\ObjetoPostal();
    $encomenda->setServicosAdicionais(array($servicoAdicional, $servicoAdicional2));
    $encomenda->setDestinatario($destinatario);
    $encomenda->setDestino($destino);
    $encomenda->setDimensao($dimensao);
    $encomenda->setEtiqueta($etiqueta);
    $encomenda->setPeso(0.500);// 500 gramas
    $encomenda->setObservacao('Lorem ipsum dolor sit amet.');
    $encomenda->setServicoDePostagem(new \PhpSigep\Model\ServicoDePostagem(\PhpSigep\Model\ServicoDePostagem::SERVICE_PAC_41068));
// ***  FIM DOS DADOS DA ENCOMENDA QUE SER� DESPACHADA *** //

// *** DADOS DO REMETENTE *** //
    $remetente = new \PhpSigep\Model\Remetente();
    $remetente->setNome('Google S�o Paulo');
    $remetente->setLogradouro('Av. Brigadeiro Faria Lima');
    $remetente->setNumero('3900');
    $remetente->setComplemento('5� andar');
    $remetente->setBairro('Itaim');
    $remetente->setCep('04538-132');
    $remetente->setUf('SP');
    $remetente->setCidade('S�o Paulo');
// *** FIM DOS DADOS DO REMETENTE *** //


$plp = new \PhpSigep\Model\PreListaDePostagem();
$plp->setAccessData(new \PhpSigep\Model\AccessDataHomologacao());
$plp->setEncomendas([$encomenda,$encomenda,$encomenda,$encomenda]);
$plp->setRemetente($remetente);

return $plp;
