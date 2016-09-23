<?php

class Building
{
    // These variables are used in the scope of the class
    public $door;
    public $window;
    public $work;



    public function enter() {
        $this->door = 'front';

        // $this to call a function in this class
        $this->getReadyToWork();
    }

    public function freshAir() {
        $this->window = 'open';
    }

    public function getReadyToWork(){
        $this->work = 'now';

        // This variable's scope in only in this function
        // so it has a $. It is not a property on the class.
        $bossNotHere = 'party';
    }
}
?>