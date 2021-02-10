<?php
require "app/Skills.php";
use PHPUnit\Framework\TestCase;

class SkillsTest extends TestCase{
    private $skill;

    protected function setUp(){
        $this->skill = new Skills();
    }
    public function testSkillType(){
        $this->assertInternalType('string', $this->skill->getType());
    }
    public function testNotGoodSetType(){
        $this->assertNotInternalType('string', $this->skill->setType(2)->getType());
    }

}