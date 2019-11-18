<?php


abstract class Vehicle
{
    // Attributes

    /**
     * @var string
     */
    protected $color;

    /**
     * @var int
     */
    protected $currentSpeed;

    /**
     * @var int
     */
    protected $nbSeats;

    /**
     * @var int
     */
    protected $nbWheels;

    // Methods

    /**
     * Vehicle constructor.
     * @param string $color
     * @param int $nbSeats
     */
    public function __construct(string $color, int $nbSeats)
    {
        $this->setColor($color);
        $this->setNbSeats($nbSeats);
    }

    /**
     * @return string
     */
    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go!";
    }

    /**
     * @return string
     */
    public function brake(){
        $sentence = '';
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= 'Brake!!!';
        }
        $sentence .= 'I\'m stopped!';
        return $sentence;
    }

    // Getters and setters

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->$nbSeats = $nbSeats;
    }
}