<?php

Class Speedometer
{
    public const TO_MILES = 0.621371;
    public const TO_KM = 1.60934;

    public static function convertKmToMiles($km)
    {
        return $km * self::TO_MILES;
    }
    public static function convertMilesToKm($miles)
    {
        return $miles * self::TO_KM;
    }
}