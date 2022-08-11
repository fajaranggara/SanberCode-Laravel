<?php
class Animal {
    public $legs = 2;
    public $cold_blooded = false;

    public function __construct ($name) {
        $this->name = $name;
    }

    public function get_cold_blooded() {
        if($this->cold_blooded === false) {
            echo "Cold-blooded: False" . "<br>";
        } else {
            echo "Cold-blooded: True" . "<br>";
        }
        
    }
}
?>
