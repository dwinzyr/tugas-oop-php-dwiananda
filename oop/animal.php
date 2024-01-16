<?php
    class animal {
        public $name;
        public $legs = 4;
        public $cold_blooded = "No";

        public function __construct($name, $legs = "4", $cold_blooded = "no")
        {
            $this -> name = $name;
            $this -> legs = $legs;
            $this -> cold_blooded = $cold_blooded;
        }
        public function get_name()
        {
            return "Shaun";
        }
        public function get_legs()
        {
            return "4";
        }
        public function get_cold_blooded()
        {
            return "No";
        }
        public function get_yell()
        {
            return "Auoo";
        }
    }
?>