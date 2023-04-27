<?php
    class Learning_Path{
        private $learning_path_name;
        private $learning_path_id;
        private $number_of_users_in_lp;
        private $number_of_mentors_in_lp;

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
                    SETERS
*/

        public function setLearningPathName($learning_path_name){
            $this->learning_path_name=$learning_path_name;
        }

        public function setLearningPathId($learning_path_id){
            $this->learning_path_id=$learning_path_id;
        }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
                    GETERS
*/

        public function getLearningPathName(){
            return $this->learning_path_name;
        }

        public function getLearningPathId(){
            return $this->learning_path_id;
        }

        public function numberOfUsersInLp(){
            return $this->number_of_users_in_lp;
        }

        public function numberOfMentorsInLp(){
            return $this->number_of_mentors_in_lp;
        }
    }
?>