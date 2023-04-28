<?php
echo "feedback";
/**
 * Summary of feedback
 */
class feedback{
    private $content;
    private $Mentor_id;
    private $User_id;
    private $Time;
    public function __construct($content, $Mentor_id, $User_id) {
    $this->User_id = $User_id;
    $this->Mentor_id = $Mentor_id;
    $this->content = $content;
    $this->Time = time();
}
//////////////////seters&&geters/////////////////////

    
/**
 * Summary of getContent
 * @return mixed
 */
public function getContent(){
    return $this->content ;
}
/**
 * Summary of setContent
 * @param mixed $content
 * @return void
 */
public function setContent($content){
    $this->content=$content ;
}
public function getMentor_id(){
    return $this->Mentor_id;
}
public function setMentor_id($MentorId){
    $this->Mentor_id=$MentorId;
}
public function getUser_id(){
    return $this->User_id ;
}

public function setUser_id($UserId){
    $this->User_id=$UserId ;
}

	/**
	 * @return mixed
	 */
	public function getTime() {
		return $this->Time;
	}
	
	/**
	 * @param mixed $Time 
	 * @return self
	 */
	public function setTime($Time): self {
		$this->Time = $Time;
		return $this;
	}
}


?>