<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $capacity;

    /**
     * @var int
     */
    private $load = 0;

    //Methods

    /**
     * Truck constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     * @param int $capacity
     */
    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

    /**
     * @return string
     */
    public function isFull() : string
    {
        if ($this->load < $this->capacity){
            $result =  'in filling';
        } else {
            $result = 'full';
        }
        return $result;
    }

    // Getters and setters

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return Car
     */
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, Car::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param string $capacity
     */
    public function setCapacity(string $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param string $load
     */
    public function setLoad(string $load): void
    {
        if ($load <= $this->capacity) {
            $this->load = $load;
        } else {
            $this->load = $this->capacity;
        }
    }

}