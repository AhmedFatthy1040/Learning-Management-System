<?php
    require_once 'Question.php';
    class Exam extends Question{
    class Exam extends Course{
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
        private $course_id;
        private $exam_grade;

        public function setExamDuration($exam_duration){
            $this->exam_duration=$exam_duration;
        }

        public function addQuestion1(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
        public function addQuestion2(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
        public function setQuestion3(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
        public function setQuestion4(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
        public function setQuestion5(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
        public function setQuestion6(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        public function setExamGrade($exam_grade){
            $this->exam_grade=$exam_grade;
        }
        public function setQuestion7(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        public function getExamGrade(){
            return $this->exam_grade;
        }
        public function setQuestion8(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        public function getExamDuration(){
            return $this->exam_duration;
        }
        public function setQuestion9(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        public function setCourseID($course_id){
            $this->course_id=$course_id;
        }
        public function setQuestion10(){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)                                     INSERT INTO table_name (column1, column2, column3,...)
                                                                                                           VALUES (value1, value2, value3,...)
                    VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        public function getCourseID(){
            return $this->course_id;
        }
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
                    GETERS
*/

        public function getExamId(){
        public function getExamID(){
            return $this->exam_id;
        }

        public function getExamDuration(){
            return $this->exam_duration;
        }
}
    }
?>