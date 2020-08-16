<?php
namespace PhpSigep\Model;

/**
 * O manual de implementa��o do Correios n�o documenta todos os campos que o WebSevice retorna.
 * Todos os demais atributos que n�o est�o declarados nesta classe ser�o inseridos em tempo de execu��o.
 * Use o m�todo {@link BuscaClienteResult::toArray()} para ver todos os atributo criados dinamicamente ou use o 
 * m�todo {@link BuscaClienteResult::get()} para obter o valor de um atributo espec�fico.
 * 
 * @author: Stavarengo
 */
class BuscaClienteResult extends AbstractModel
{
    /**
     * @var string
     */
    protected $cnpj;
    /**
     * @var \stdClass
     */
    protected $contratos;

    public function __construct(array $initialValues = array())
    {
        $this->_failIfAtributeNotExiste = false;
        parent::__construct($initialValues);
    }

    /**
     * @param string $cnpj
     * @return $this;
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param \stdClass $contratos
     * @return $this;
     */
    public function setContratos(\stdClass $contratos)
    {
        $this->contratos = $contratos;

        return $this;
    }

    /**
     * @return \stdClass
     */
    public function getContratos()
    {
        return $this->contratos;
    }
    
}