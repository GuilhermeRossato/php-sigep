<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class Destinatario extends AbstractModel
{

    /**
     * Nome do destinat�rio.
     * Obrigat�rio.
     * Max length: 50
     * Tag: nome_destinatario
     * @var string
     */
    protected $nome;

    /**
     * Telefone do Destinat�rio.
     * N�o Obrigat�rio.
     * Max length: 12
     * Tag: telefone_destinatario
     * @var string
     */
    protected $telefone;

    /**
     * Celular do Destinat�rio.
     * N�o Obrigat�rio.
     * Max length: 12
     * Tag: celular_destinatario
     * @var string
     */
    protected $celular;

    /**
     * Email do Destinat�rio.
     * N�o obrigat�rio
     * Max length: 50
     * Tag: email_destinatario
     * @var string
     */
    protected $email;

    /**
     * Logradouro do destinat�rio.
     * Obrigat�rio.
     * Max length: 50
     * Tag: logradouro_destinatario
     * @var string
     */
    protected $logradouro;

    /**
     * Complemento do endere�o.
     * N�o obrigat�rio.
     * Max length: 30
     * Tag: complemento_destinatario
     * @var string
     */
    protected $complemento;

    /**
     * N�mero da casa, pr�dio, etc. Parte do endere�o.
     * Obrigat�rio.
     * Max length: 6
     * Tag: numero_end_destinatario
     * @var string
     */
    protected $numero;

    /**
     * Indica se o destinat�rio � clique e retire
     * N�o Obrigat�rio.
     * Tag: is_clique_retire
     * @var boolean
     */
    protected $isCliqueRetire = false;

    /**
     * 
     * Obrigat�rio.
     * Max length: 50
     * Tag: bairro
     * @var string
     */
    protected $bairro;

    /**
     * 
     * N�o Obrigat�rio.
     * Max length: 50
     * Tag: referencia
     * @var string
     */
    protected $referencia;

    /**
     * 
     * Obrigat�rio.
     * Max length: 12
     * Tag: cidade
     * @var string
     */
    protected $cidade;

    /**
     * 
     * Obrigat�rio.
     * Max length: 2
     * Tag: uf
     * @var string
     */
    protected $uf;

    /**
     * 
     * Obrigat�rio.
     * Max length: 8
     * Tag: cep
     * @var int
     */
    protected $cep;

    /**
     * 
     * N�o Obrigat�rio.
     * Max length: 3
     * Tag: ddd
     * @var int
     */
    protected $ddd;

    /**
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param string $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param string $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param string $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return boolean
     */
    public function getIsCliqueRetire()
    {
        return $this->isCliqueRetire;
    }

    /**
     * @param boolean $isCliqueRetire
     */
    public function setIsCliqueRetire($isCliqueRetire = false)
    {
        $this->isCliqueRetire = $isCliqueRetire;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function getDdd()
    {
        return $this->ddd;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
        return $this;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
        return $this;
    }
}
