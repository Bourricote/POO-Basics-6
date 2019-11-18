<?php


final class ResidentialWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 2;

    /**
     * @var int
     */
    protected $maxSpeed = 50;

    public function addVehicle($vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}