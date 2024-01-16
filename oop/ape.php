<?php
require_once "animal.php";
    class ape extends animal
    {
        public function getApeName()
        {
            return "Kera Sakti";
        }
        public function getApeLegs()
        {
            return "2";
        }
        public function getApeBlood()
        {
            return "No";
        }
        public function getApeYell()
        {
            return "Auoo";
        }
    }

?>