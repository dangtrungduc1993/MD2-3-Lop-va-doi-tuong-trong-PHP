<?php

class Fan
{
    const slow = 1;
    const medium = 2;
    const fast = 3;
    private int $speed ;
    private float $radius ;
    private string $color ;
    private $on ;
    public function __construct()
    {
        $this->speed = 1;
        $this->radius = 5;
        $this->color = "blue";
        $this->on = false;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    public function isOn(): bool
    {
        return $this->on;
    }

    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function toString(){
        if($this->on){
            return "Speed : ". $this->speed . " , Color : " . $this->color . " , Radius : " . $this->radius . " , fan is on";
        }
        if (!$this->on){
            return  "Color : " . $this->color . " , Radius : " . $this->radius . " , fan is off";
        }

    }

}
$Fan1 = new Fan();
$Fan1->setSpeed(Fan::fast);
$Fan1->setRadius(10);
$Fan1->setColor("yellow");
$Fan1->setOn(true);
echo $Fan1->toString() . "<br>";

$Fan2 = new Fan();
$Fan2->setSpeed(Fan::medium);
$Fan2->setRadius(5);
$Fan2->setColor("blue");
$Fan2->setOn(false);
echo $Fan2->toString();