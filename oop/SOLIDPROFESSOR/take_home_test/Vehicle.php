<?php
abstract class Vehicle
{
    private $headLightQuality;
    private $color;
    private $minBreakDistance;
    private $make;

    // HeadLightQuality getters & setters
    function setHeadLightQuality($headLightQuality)
    {
        $this->headLightQuality = $headLightQuality;
    }

    function getHeadLightQuality()
    {
        return $this->headLightQuality;
    }

    // Color getters & setters
    function setColor($color)
    {
        $this->color = $color;
    }

    function getColor()
    {
        return $this->color;
    }

    // Break Distance getters & setters
    function setMinBreakDistance($minBreakDistance)
    {
        $this->minBreakDistance = $minBreakDistance;
    }
    function getMinBreakDistance()
    {
        return $this->minBreakDistance;
    }

    // Make getters and setters
    function setMake($make)
    {
        $this->make = $make;
    }
    function getMake()
    {
        return $this->make;
    }
}
