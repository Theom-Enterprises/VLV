<?php

namespace Theom\Vlv;

class Hotel
{
    private string $name;
    private string $sight;
    private string $businessHours;

    /**
     * @param string $name
     * @param string $sight
     * @param string $businessHours
     */
    public function __construct(string $name, string $sight, string $businessHours)
    {
        $this->name = $name;
        $this->sight = $sight;
        $this->businessHours = $businessHours;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSight(): string
    {
        return $this->sight;
    }

    /**
     * @return string
     */
    public function getBusinessHours(): string
    {
        return $this->businessHours;
    }

}