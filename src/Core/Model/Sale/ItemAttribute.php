<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 14/12/2017
 * Time: 05:13 PM
 */

namespace Greenter\Model\Sale;

/**
 * Attributos aplicado al item de la venta relacionado a detracciones.
 *
 * Class ItemAttribute
 * @package Greenter\Model\Sale
 */
class ItemAttribute
{
    /**
     * @var string
     */
    private $code;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $value;
    /**
     * @var \DateTime
     */
    private $fecInicio;
    /**
     * @var \DateTime
     */
    private $fecFin;
    /**
     * @var int
     */
    private $duracion;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return ItemAttribute
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ItemAttribute
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ItemAttribute
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFecInicio()
    {
        return $this->fecInicio;
    }

    /**
     * @param \DateTime $fecInicio
     * @return ItemAttribute
     */
    public function setFecInicio($fecInicio)
    {
        $this->fecInicio = $fecInicio;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFecFin()
    {
        return $this->fecFin;
    }

    /**
     * @param \DateTime $fecFin
     * @return ItemAttribute
     */
    public function setFecFin($fecFin)
    {
        $this->fecFin = $fecFin;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set duracion en dias.
     *
     * @param int $duracion
     * @return ItemAttribute
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
        return $this;
    }
}