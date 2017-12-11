<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 28/09/2017
 * Time: 05:19 PM
 */

namespace Greenter\Model\Sale;

use Greenter\Model\Client\Client;
use Greenter\Model\Despatch\Direction;

/**
 * Class EmbededDespatch
 * @package Greenter\Model\Sale
 */
class EmbededDespatch
{
    /**
     * @Assert\Valid()
     * @var Direction
     */
    private $llegada;

    /**
     * @Assert\Valid()
     * @var Direction
     */
    private $partida;

    /**
     * @Assert\Valid()
     * @var Client
     */
    private $transportista;

    /**
     * @Assert\Length(max="10")
     * @var string
     */
    private $transpPlaca;

    /**
     * @var \DateTime
     */
    private $fecTraslado;

    /**
     * @Assert\Length(max="40")
     * @var string
     */
    private $nroConstanciaVehiculo;

    /**
     * @var Client[]
     */
    private $conductores;

    /**
     * @Assert\Length(min="2", max="2")
     * @var string
     */
    private $modTraslado;

    /**
     * @Assert\Type("numeric")
     * @var float
     */
    private $pesoBruto;

    /**
     * @Assert\Length(max="4")
     * @var string
     */
    private $undPesoBruto;

    /**
     * @return Direction
     */
    public function getLlegada()
    {
        return $this->llegada;
    }

    /**
     * @param Direction $llegada
     * @return EmbededDespatch
     */
    public function setLlegada($llegada)
    {
        $this->llegada = $llegada;
        return $this;
    }

    /**
     * @return Direction
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * @param Direction $partida
     * @return EmbededDespatch
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;
        return $this;
    }

    /**
     * @return Client
     */
    public function getTransportista()
    {
        return $this->transportista;
    }

    /**
     * @param Client $transportista
     * @return EmbededDespatch
     */
    public function setTransportista($transportista)
    {
        $this->transportista = $transportista;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranspPlaca()
    {
        return $this->transpPlaca;
    }

    /**
     * @param string $transpPlaca
     * @return EmbededDespatch
     */
    public function setTranspPlaca($transpPlaca)
    {
        $this->transpPlaca = $transpPlaca;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFecTraslado()
    {
        return $this->fecTraslado;
    }

    /**
     * @param \DateTime $fecTraslado
     * @return EmbededDespatch
     */
    public function setFecTraslado($fecTraslado)
    {
        $this->fecTraslado = $fecTraslado;
        return $this;
    }

    /**
     * @return Client[]
     */
    public function getConductores()
    {
        return $this->conductores;
    }

    /**
     * @param Client[] $conductores
     * @return EmbededDespatch
     */
    public function setConductores($conductores)
    {
        $this->conductores = $conductores;
        return $this;
    }

    /**
     * @return string
     */
    public function getNroConstanciaVehiculo()
    {
        return $this->nroConstanciaVehiculo;
    }

    /**
     * @param string $nroConstanciaVehiculo
     * @return EmbededDespatch
     */
    public function setNroConstanciaVehiculo($nroConstanciaVehiculo)
    {
        $this->nroConstanciaVehiculo = $nroConstanciaVehiculo;
        return $this;
    }

    /**
     * @return string
     */
    public function getModTraslado()
    {
        return $this->modTraslado;
    }

    /**
     * @param string $modTraslado
     * @return EmbededDespatch
     */
    public function setModTraslado($modTraslado)
    {
        $this->modTraslado = $modTraslado;
        return $this;
    }

    /**
     * @return float
     */
    public function getPesoBruto()
    {
        return $this->pesoBruto;
    }

    /**
     * @param float $pesoBruto
     * @return EmbededDespatch
     */
    public function setPesoBruto($pesoBruto)
    {
        $this->pesoBruto = $pesoBruto;
        return $this;
    }

    /**
     * @return string
     */
    public function getUndPesoBruto()
    {
        return $this->undPesoBruto;
    }

    /**
     * @param string $undPesoBruto
     * @return EmbededDespatch
     */
    public function setUndPesoBruto($undPesoBruto)
    {
        $this->undPesoBruto = $undPesoBruto;
        return $this;
    }
}