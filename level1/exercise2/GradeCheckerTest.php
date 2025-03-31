<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;


class GradeCheckerTest extends TestCase{
    public function testCheckGrade() {
        
        $this->assertEquals("First Division.", checkGrade(60));
        $this->assertEquals("First Division.", checkGrade(100));

      
        $this->assertEquals("Second Division.", checkGrade(45));
        $this->assertEquals("Second Division.", checkGrade(59));

       
        $this->assertEquals("Third Division.", checkGrade(33));
        $this->assertEquals("Third Division.", checkGrade(44));

      
        $this->assertEquals("Not Passed.", checkGrade(0));
        $this->assertEquals("Not Passed.", checkGrade(32));

    }

}