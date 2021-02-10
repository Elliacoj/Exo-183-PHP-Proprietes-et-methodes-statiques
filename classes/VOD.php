<?php

class VOD
{
    private array $film = ["Star wars", "Le seigneur des anneaux", "Ace ventura", "Top gun", "Forest Gump"];
    private float $tarif = 19.99;
    private static int $tAbonner = 0;

    /**
     * @return array|string[]
     */
    public function getFilm(): array
    {
        return $this->film;
    }

    /**
     * @param array|string[] $film
     */
    public function setFilm(array $film): void
    {
        $this->film = $film;
    }

    /**
     * @return float
     */
    public function getTarif(): float
    {
        return $this->tarif;
    }

    /**
     * Add +1 tAbonner
     */
    public static function addAbo(): void {
        self::$tAbonner++;
    }

    /**
     * Return total abonner
     * @return string
     */
    public static function getAbo(): int {
        return self::$tAbonner;
    }

}
