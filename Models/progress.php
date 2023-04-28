<?php 
    echo'class Progress';
    class progress{
        private $score ;
        private $finished ;

        public function __construct($score, $finished,) {
            $this->finished = $finished;
            $this->score = $score;
        }
        ///////////////////////////////seters && geters////////////////////////
        public function getScore(){
            return $this-> score;
        }
        public function getFinished(){
            return $this-> finished;
        }
        public function setFinished($fin){
            $this->finished=$fin ;
        }
        
        public function setScore($sco){
            $this->score=$sco ;
        
    }
}


?>