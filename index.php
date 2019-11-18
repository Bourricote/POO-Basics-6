<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

require_once 'Speedometer.php';

echo '10km is ' . Speedometer::convertKmToMiles(10) . 'miles</br>';

echo '10miles is ' . Speedometer::convertMilesToKm(10) . 'km</br>';