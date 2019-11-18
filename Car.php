<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
      'fuel',
      'electric',
    ];

    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake = false;

    // Methods

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    /**
     * @return string
     * @throws Exception
     */
    public function start(): string
    {
        if ($this->hasParkBrake) {
            throw new  Exception('Frein à main enclenché ! </br>' );
        } else {
            $this->currentSpeed = 0;
            return 'La voiture est démarrée  </br>';
        }
    }

    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
    }

    /**
     * @return void
     */
    public function setParkBrake()
    {
        if ($this->hasParkBrake) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
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
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param string $energyLevel
     */
    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}
