<?php
namespace PhpSigep\Model;
use PhpSigep\Bootstrap;

/**
 * @author: Stavarengo
 */
class PreListaDePostagem extends AbstractModel
{

//	/**
//	 * Identifica o registro da PLP no SIGEP Master. 
//	 * @var int
//	 */
//	protected $id_plp;
    /**
     * Opcional.
     * Quando n�o informado ser� usado o valor retornado pelo m�todo {@link \PhpSigep\Bootstrap::getConfig() }
     * @var AccessData
     */
    protected $accessData;
    /**
     * Dados da pessoa que est� remetendo esta encomenda.
     * @var Remetente
     */
    protected $remetente;
    /**
     * Os objetos que est�o sendo postados.
     * @var ObjetoPostal[]
     */
    protected $encomendas;

    /**
     * @param \PhpSigep\Model\AccessData $accessData
     *      Opcional.
     *      Quando null ser� usado o valor retornado pelo m�todo {@link \PhpSigep\Bootstrap::getConfig() }
     */
    public function setAccessData($accessData)
    {
        $this->accessData = $accessData;
    }

    /**
     * @return \PhpSigep\Model\AccessData
     */
    public function getAccessData()
    {
        return ($this->accessData ? $this->accessData : Bootstrap::getConfig()->getAccessData());
    }

    /**
     * @param \PhpSigep\Model\ObjetoPostal[] $encomendas
     */
    public function setEncomendas($encomendas)
    {
        $this->encomendas = $encomendas;
    }

    /**
     * @return \PhpSigep\Model\ObjetoPostal[]
     */
    public function getEncomendas()
    {
        return $this->encomendas;
    }

    /**
     * @param \PhpSigep\Model\Remetente $remetente
     */
    public function setRemetente($remetente)
    {
        $this->remetente = $remetente;
    }

    /**
     * @return \PhpSigep\Model\Remetente
     */
    public function getRemetente()
    {
        return $this->remetente;
    }

}
