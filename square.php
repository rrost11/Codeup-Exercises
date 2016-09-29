<?php
class Square extends Rectangle
{
    public function __construct($height)
    {
        parent::__construct($height, $height);
    }
    public function area()
    {
        return pow($this->height, 2);
    }
    public function perimeter()
    {
        return $this->height * 4;
    }
}