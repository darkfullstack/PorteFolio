<?php
namespace App;

class Skills{
    private $type;
    private $percent;
    
    public function __construct($type="php",$percent=65){
        $this->type = $type;
        $this->percent = $percent;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
        return $this;
    }
    public function getPercent(){
        return $this->percent;
    }

    public function setPercent($percent){
        $this->percent = $percent;
        return $this;
    }
}


?>