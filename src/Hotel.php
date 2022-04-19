<?php

namespace Theom\Vlv;

class Hotel
{
    private string $name;
    private int $stars;
    private string $sehenswuerdigkeiten;
    private string $openingTimes;

    /**
     * @param string $name
     * @param int $stars
     */
    public function __construct(string $name, int $stars, string $sehenswuerdigkeiten, $openingTimes)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->sehenswuerdigkeiten = $sehenswuerdigkeiten;
        $this->openingTimes = $openingTimes;
    }

    /**
     * @return string
     */
    public function getOpeningTimes(): string
    {
        return $this->openingTimes;
    }

    /**
     * @param string $openingTimes
     */
    public function setOpeningTimes(string $openingTimes): void
    {
        $this->openingTimes = $openingTimes;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getStars(): int
    {
        return $this->stars;
    }

    /**
     * @param int $stars
     */
    public function setStars(int $stars): void
    {
        $this->stars = $stars;
    }

    /**
     * @return string
     */
    public function getSehenswuerdigkeiten(): string
    {
        return $this->sehenswuerdigkeiten;
    }

    /**
     * @param string $sehenswuerdigkeiten
     */
    public function setSehenswuerdigkeiten(string $sehenswuerdigkeiten): void
    {
        $this->sehenswuerdigkeiten = $sehenswuerdigkeiten;
    }


}