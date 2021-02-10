<?php 
class DevPerf{
    private $skills;

    public function __construct($arraySkills = []){
        $this->skills = $arraySkills;
    }

    public function skillLength(){
        return count($this->skills);
    }
    public function getSkills(){
        return $this->skills;
    }

    public function setSkills($skills = []){
        $this->skills = $skills;

        return $this;
    }

}
?>