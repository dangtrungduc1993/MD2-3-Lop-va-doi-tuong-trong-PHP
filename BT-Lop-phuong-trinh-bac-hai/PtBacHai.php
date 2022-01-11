<?php

class PtBacHai
{
    private $a;
    private $b;
    private $c;
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }
    public function getDelta()
    {
        $delta = $this->b**2 - 4*$this->a * $this->c;
        return $delta;
    }
    public function getRoot1()
    {
        if ($this->getDelta() > 0){
            $root1 = (-($this->b) + $this->getDelta()**0.5)/(2* $this->a);
            return $root1;
        }else if ($this->getDelta() == 0){
            $root1 = -($this->b * (2 * $this->a));
            return $root1;

        }else{
            return "The equation has no roots";
        }
    }
    public function getRoot2()
    {
        if ($this->getDelta() > 0){
            $root2 = (-($this->b) - $this->getDelta()**0.5)/(2* $this->a);
            return $root2;
        }else if ($this->getDelta() == 0){
            $root2 = -($this->b * (2 * $this->a));
            return $root2;

        }else{
            return "The equation has no roots";
        }
    }
}


