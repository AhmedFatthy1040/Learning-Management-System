<?php
    require_once 'Question.php';
    class Exam extends Question{
        private $exam_id;
        private $exam_duration;
        private $question_id;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
                    SETERS
*/

        public function setExamId($exam_id){
            $this->exam_id=$exam_id;
        }

        public function setExamDuration($exam_duration){
            $this->exam_duration=$exam_duration;
        }

        public function addQuestion(){
            // $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           //VALUES (value1, value2, value3,...)
            //         VALUES ('John', 'Doe', 'john@example.com')";

            // if ($conn->query($sql) === TRUE) {
            //     echo "New record created successfully";
            // } else {
            //     echo "Error: " . $sql . "<br>" . $conn->error;
            // }

        }
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
                    GETERS
*/

        public function getExamId(){
            return $this->exam_id;
        }

        public function getExamDuration(){
            return $this->exam_duration;
        }
}
?>