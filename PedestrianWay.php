<?php


final class PedestrianWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 1;

    /**
     * @var int
     */
    protected $maxSpeed = 10;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}