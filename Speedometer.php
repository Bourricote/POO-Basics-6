<?php


class Speedometer
{

    const MULTIPLIER = 0.621;

    /**
     * @param $distance float
     * @return float
     */
    public static function convertKmToMiles($distance): float
    {
        return round($distance * self::MULTIPLIER, 3);
    }

    /**
     * @param $distance float
     * @return float
     */
    public static function convertMilesToKm($distance): float
    {
        return round($distance / self::MULTIPLIER, 3);
    }
}