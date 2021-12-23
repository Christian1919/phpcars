<?php

class  Car
{
    /** @var int $id The car  identifier */
    private int $id;

    /** @var string $name The car name */
    private string $name;

    /** @var int $model the car model */
    private int $model;

    /** @var int $cylinders Num of cylinders */
    private int $cylinders;

    /** @var int $horsepower The car horsepower */
    private int $horsepower;

    /** @var int $weight The car  weight */
    private int $weight;

    /** @var string $origin The car origin. Must be 2 characters length */
    private string $origin;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getid()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        return $this->name = $name;
    }
}// Fin de la classe
