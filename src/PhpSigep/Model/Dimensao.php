<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class Dimensao extends AbstractModel
{

    const TIPO_ENVELOPE      = '001';
    const TIPO_PACOTE_CAIXA  = '002';
    const TIPO_ROLO_CILINDRO = '003';
    /**
     * Deve ser uma das constantes {@link Dimensao}::TIPO_*.
     * @var int
     */
    protected $tipo;
    /**
     * Em cent�metros.
     * @var float
     */
    protected $altura;
    /**
     * Em cent�metros.
     * @var float
     */
    protected $largura;
    /**
     * Em cent�metros.
     * @var float
     */
    protected $comprimento;
    /**
     * Em cent�metros.
     * @var float
     */
    protected $diametro;

    /**
     * @param float $altura
     *      Em cent�metros
     */
    public function setAltura($altura)
    {
        $this->altura = (float)$altura;
    }

    /**
     * @return float
     *      Em cent�metros
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param float $comprimento
     *      Em cent�metros
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = (float)$comprimento;
    }

    /**
     * @return float
     *      Em cent�metros
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * @param float $diametro
     *      Em cent�metros
     */
    public function setDiametro($diametro)
    {
        $this->diametro = (float)$diametro;
    }

    /**
     * @return float
     *      Em cent�metros
     */
    public function getDiametro()
    {
        return $this->diametro;
    }

    /**
     * @param float $largura
     *      Em cent�metros
     */
    public function setLargura($largura)
    {
        $this->largura = (float)$largura;
    }

    /**
     * @return float
     *      Em cent�metros
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * @param int $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

}
