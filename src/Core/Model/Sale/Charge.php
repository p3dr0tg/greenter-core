<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 14/12/2017
 * Time: 05:29 PM
 */

namespace Greenter\Model\Sale;

/**
 * Class Charge
 * @package Greenter\Model\Sale
 */
class Charge
{
    /**
     * @var string
     */
    private $code;
    /**
     * @var float
     */
    private $factor;
    /**
     * @var float
     */
    private $mto;
    /**
     * @var float
     */
    private $mtoBase;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set code - catalog 53.
     * @param string $code
     * @return Charge
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return float
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * @param float $factor
     * @return Charge
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * @return float
     */
    public function getMto()
    {
        return $this->mto;
    }

    /**
     * Set monto del cargo.
     *
     * @param float $mto
     * @return Charge
     */
    public function setMto($mto)
    {
        $this->mto = $mto;
        return $this;
    }

    /**
     * @return float
     */
    public function getMtoBase()
    {
        return $this->mtoBase;
    }

    /**
     * Set monto sobre el cual se le debe aplicar el cargo.
     * @param float $mtoBase
     * @return Charge
     */
    public function setMtoBase($mtoBase)
    {
        $this->mtoBase = $mtoBase;
        return $this;
    }
}