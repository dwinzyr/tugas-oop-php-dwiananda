<?php
require_once "animal.php";
    class frog extends animal
    {
        public function getFrogName()
        {
            return "Buduk";
        }
        public function getFrogLegs()
        {
            return "4";
        }
        public function getFrogBlood()
        {
            return "no";
        }
        public function getFrogJump()
        {
            return "Hop Hop";
        }
    }
?>