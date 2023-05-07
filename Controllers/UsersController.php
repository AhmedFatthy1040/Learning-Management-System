<?php

namespace Controllers;

require_once(__DIR__ . "/DBController.php");
require_once(__DIR__ . "/../Models/Mentor.php");
require_once(__DIR__ . "/../Models/Course.php");
require_once(__DIR__ . "/../Models/user.php");
require_once(__DIR__ . "/../Models/Lecture.php");
require_once(__DIR__ . "/../Models/Exam.php");
use Mentor;
use Course;
use User;
use Lecture;
use Exam;

class UsersController
{
    protected $db;

    public function GetMentors()
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "select * from mentor";
            return $this->db->Select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function GetCourses()
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "SELECT id, name, description, requirements, mentor_id, learning_path_id FROM course ORDER BY id desc";
            return $this->db->Select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function AddMentors(Mentor $Mentor)
    {
        $this->db = new DBController();
        $fname = $Mentor->getFirstName();
        $lname = $Mentor->getLastName();
        $phone = $Mentor->getPhoneNumber();
        $password = $Mentor->GetPassword();
        $email = $Mentor->getEmail();
        $salary = $Mentor->getSalary();
        $nationality = $Mentor->getNationality();
        $gender = $Mentor->GetGender();
        $birthdate = $Mentor->getDateOfBirth();
        $final_rate = 0;

        if ($this->db->connect()) {
            $query = "insert into mentor(fname, lname, password, email, nationality, gender, birthdate, phone, salary) values ('$fname' , '$lname', '$password', '$email', '$nationality', '$gender', '$birthdate', '$phone', $salary);";
            return $this->db->query($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function AddCourses(Course $Course)
    {
        $this->db = new DBController();
        $Name = $Course->GetName();
        $Requirements = $Course->GetRequirements();
        $Description = $Course->GetDescription();
        $MentorID = $Course->GetMentorID();
        $LearningPathID = $Course->GetLearningPathID();

        if ($this->db->connect()) {
            $query = "insert into course(name, description, requirements, mentor_id, learning_path_id) values ('$Name' , '$Description', '$Requirements', '$MentorID', '$LearningPathID');";
            return $this->db->query($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }



    public function AddExam(Exam $Exam)
    {
        $this->db = new DBController();
        $Duration = $Exam->getExamDuration();
        $Course_ID = $Exam->getCourseID();

        if ($this->db->connect()) {
            $query = "insert into exam(duration, course_id) values ('$Duration' , '$Course_ID');";
            return $this->db->query($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }


    public function AddLectures(Lecture $Lecture)
    {
        $this->db = new DBController();
        $Name = $Lecture->GetName();
        $Course_ID = $Lecture->getCourse_ID();
        $Info = $Lecture->getInfo();
        $Week = $Lecture->getWeek();
        $Link = $Lecture->getLink();

        if ($this->db->connect()) {
            $query = "insert into lecture(name, course_id, info, week, link) values ('$Name', '$Course_ID', '$Info', '$Week', '$Link');";
            return $this->db->query($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function DeleteFromTable($Type, $ID)
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "DELETE FROM $Type WHERE id = $ID";
            return $this->db->query($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }

    }

    public function GetUsers()
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "SELECT id, fname, lname, gender, email, phone FROM user ORDER BY id desc";
            return $this->db->Select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function GetCoursesForMentor($MentorID)
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "SELECT id, name, description, requirements, mentor_id, learning_path_id FROM course WHERE mentor_id = '$MentorID' ORDER BY id desc";
            return $this->db->Select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function AddLPS(\Learning_Path $LP)
    {
        $this->db = new DBController();
        $Name = $LP->getLearningPathName();
        $id = $LP->getLearningPathId();
    }
    public function GetTranscript()
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $id = $_SESSION["UserID"];
            $query = "select c.name as course, cu.grade as grade, cu.gpa as gpa
            from course c, user u, course_user cu
            where u.id = $id and cu.user_id = u.id and cu.course_id = c.id and cu.finished = true";
            return $this->db->Select($query);

        } else {
            echo "Error in Database Connection";
            return false;
        }
    }
    public function GetMentorsForStudent()
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query = "select YEAR(birthdate),fname,lname,password,nationality,gender,email,phone,salary,final_rate from mentor";
            return $this->db->Select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }
    public function GetAllCourses()
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $id = $_SESSION["UserID"];
            $query = "select c.name as course, cu.grade as grade, cu.gpa as gpa
            from course c, user u, course_user cu
            where u.id = $id and cu.user_id = u.id and cu.course_id = c.id";
            return $this->db->Select($query);

        } else {
            echo "Error in Database Connection";
            return false;
        }

    }
    public function EditUser(User $user,$entity,$value)
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $id = $_SESSION["UserID"];
            $query = "UPDATE user SET $entity = '$value'
            WHERE id = $id";
            return $this->db->query($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }
    public function EditMentor(User $mentor,$entity,$value)
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $id = $_SESSION["MentorID"];
            $query = "UPDATE mentor SET $entity = '$value'
            WHERE id = $id";
            return $this->db->query($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }
    public function GetUser()
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $id = $_SESSION["UserID"];
            $query = "select * from user where id = $id";
            return $this->db->Select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }
    public function GetLearningPathCoursesInfo($id)
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query="select c.id as course_id,c.name as course,
                    c.description as description, lp.name as learning_path,
                    m.fname as mentor_fname, m.lname as mentor_lname 
                    from course c, mentor m, learning_path lp
                    where m.id = c.mentor_id and lp.id = $id 
                    and c.learning_path_id = lp.id;";
            return $this->db->Select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
}
    public function GetLectures($id)
    {
        $this->db = new DBController();
        if ($this->db->connect()) {
            $query="select *
                    from lecture l, course c
                    where c.id = $id and l.course_id = c.id";
            return $this->db->Select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
}
}