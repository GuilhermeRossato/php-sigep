<?php
namespace PhpSigep\Model;
use PhpSigep\Bootstrap;
use PhpSigep\InvalidArgument;

/**
 * @author: Stavarengo
 */
class SolicitaEtiquetas extends AbstractModel
{

    /**
     * @var int
     */
    protected $servicoDePostagem;
    /**
     * @var int
     */
    protected $qtdEtiquetas;
    /**
     * Padr�o true
     * Quando true far� para cada etiqueta solicitada uma requisi��o para os correios com base no valor de $qtdEtiquetas
     * Quando false incorporar� ao XML de solicita��o de etiqueta e portanto apenas uma requisi��o para os correios.
     * @var boolean
     */
    protected $modoMultiplasRequisicoes = true;
    /**
     * Opcional.
     * Quando n�o informado ser� usado o valor retornado pelo m�todo {@link \PhpSigep\Bootstrap::getConfig() }
     * @var AccessData
     */
    protected $accessData;

    /**
     * @return \PhpSigep\Model\AccessData
     */
    public function getAccessData()
    {
        return ($this->accessData ? $this->accessData : Bootstrap::getConfig()->getAccessData());
    }

    /**
     * @param AccessData $accessData
     *      Opcional.
     *      Quando null ser� usado o valor retornado pelo m�todo {@link \PhpSigep\Bootstrap::getConfig() }
     */
    public function setAccessData(AccessData $accessData)
    {
        $this->accessData = $accessData;
    }

    /**
     * @return int
     */
    public function getQtdEtiquetas()
    {
        return $this->qtdEtiquetas;
    }

    /**
     * @param int $qtdEtiquetas
     */
    public function setQtdEtiquetas($qtdEtiquetas)
    {
        $this->qtdEtiquetas = $qtdEtiquetas;
    }

    /**
     * @return ServicoDePostagem
     */
    public function getServicoDePostagem()
    {
        return $this->servicoDePostagem;
    }
    
    /**
     * Atribui para modoMultiplasRequisicoes true
     */
    public function setModoMultiplasRequisicoes(){
        $this->modoMultiplasRequisicoes = true;
    }
    
    /**
     * Atribui para modoMultiplasRequisicoes false
     */
    public function setModoUmaRequisicao(){
        $this->modoMultiplasRequisicoes = false;
    }
    
    /**
     * 
     * @return boolean
     */
    public function isModoMultiplasRequisicoes(){
        return $this->modoMultiplasRequisicoes;
    }

    /**
     * @param int|ServicoDePostagem $servicoDePostagem
     * @throws \PhpSigep\InvalidArgument
     */
    public function setServicoDePostagem($servicoDePostagem)
    {
        if (is_string($servicoDePostagem)) {
            $servicoDePostagem = new \PhpSigep\Model\ServicoDePostagem($servicoDePostagem);
        }
        
        if (!($servicoDePostagem instanceof ServicoDePostagem)) {
            throw new InvalidArgument('Servi�o de postagem deve ser uma string ou uma inst�ncia de ' .
                '\PhpSigep\Model\ServicoDePostagem.');
        }
        
        $this->servicoDePostagem = $servicoDePostagem;
    }

}
