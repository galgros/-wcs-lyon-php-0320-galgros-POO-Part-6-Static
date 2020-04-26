<?php

class Speedometer
{
    const KMTOMILES = 1.609;


    public static function convertKmToMiles(int $value): string
    {
        return $value . ' Km = ' . $value / self::KMTOMILES . ' Miles.';
    }

    public static function convertMilesToKm(int $value): string
    {
        return $value . ' Miles = ' . $value * self::KMTOMILES . ' Km.';
    }
}