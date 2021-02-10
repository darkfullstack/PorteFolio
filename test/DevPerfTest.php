<?php 
require "app/Skills.php";
require "app/DevPerf.php";

use PHPUnit\Framework\TestCase;

class DevPerfTest extends TestCase{
    private $devp;
    protected function setUp(){
        $this->devp = new DevPerf([
            new Skills("PHP Performance", 85),
            new Skills("Bootstrap Performance", 65),
            new Skills("JS Performance", 75),
            new Skills("Web Design Performance", 75),
            new Skills("Micro Framework Performance", 75),
            new Skills("PHP Unit Performance", 85)
            ]);

    }

    public function testSkillLength(){
        $this->assertInternalType('int', $this->devp->skillLength());
    }
    public function testGetSkills(){
        $this->assertContainsOnly(Skills::class, $this->devp->getSkills());
        
    }

    public function testSetSkills(){
        $this->assertContainsOnly(Skills::class, $this->devp->setSkills([new Skills()])->getSkills());
    }

}

?>