<?php
    class Rating{
        private $rate;
        private $final_rate;
 
        public function setRate($rate){
            $this->rate=$rate;
        }

        public function getRate(){
            return $this->rate;
        }

        public function getFinalRate(){
            return $this->final_rate;
        }

    }
?>