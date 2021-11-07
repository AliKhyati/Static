<?php

require_once 'Speedometer.php';

echo $result = Speedometer::convertKmToMiles(10) . '<br>';
echo Speedometer::convertMilesToKm($result);