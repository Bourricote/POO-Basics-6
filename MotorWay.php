<?php


final class MotorWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 4;

    /**
     * @var int
     */
    protected $maxSpeed = 130;

    /**
     * @param $vehicle
     * @return mixed|void
     */
    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}