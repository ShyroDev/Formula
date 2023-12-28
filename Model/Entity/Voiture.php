<?php

namespace Entity;

class Voiture
{

    private int $id;
    private string $nom;
    private string $color;
    private int $numberPlace;
    private int $numberDoor;
    private int $length;
    private int $width;


    public function __construct()
    {

    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return void
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }


    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return void
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }


    /**
     * @return int
     */
    public function getNumberPlace(): int
    {
        return $this->numberPlace;
    }

    /**
     * @param int $numberPlace
     * @return void
     */
    public function setNumberPlace(int $numberPlace): void
    {
        $this->numberPlace = $numberPlace;
    }


    /**
     * @return int
     */
    public function getNumberDoor(): int
    {
        return $this->numberDoor;
    }

    /**
     * @param int $numberDoor
     * @return void
     */
    public function setNumberDoor(int $numberDoor): void
    {
        $this->numberDoor = $numberDoor;
    }


    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return void
     */
    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

}