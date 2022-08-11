<?php
require_once 'animal.php';

class Frog extends Animal {
    public $legs = 4;
    public $cold_blooded = true;

    public function jump() {
        echo "hop hop" . "<br>";
    }
}
?>
