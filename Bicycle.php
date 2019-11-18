<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        $result = false;
        if($this->currentSpeed > 10) {
            $result = true;
        }
        return $result;
    }

    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
    }
}