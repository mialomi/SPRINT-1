<?php

include "src/NumberChecker.php";
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{
    /** @test */
    public function test_isEven(){

        $number1 = new NumberChecker(10);
        $number2 = new NumberChecker(-12);
        $number3 = 13;
        $number4 = 15;    
                
        $this->assertIsBool($number1->isEven());
        $this->assertIsBool($number2->isEven());
        
        $this->assertFalse($number1->IsEven());
        $this->assertTrue($number2->IsEven());
        
        $this->assertIsNumeric($number3, "Fals");
        $this->assertIsInt($number4, "Fals");

    }
    /** @test */
    public function test_isPositive(){

        $number5 = new NumberChecker(16);
        $number6 = new NumberChecker(-17);
        $number7 = 18.19;
        $number8 = "text";

        $this->assertTrue($number5->isPositive());
        $this->assertFalse($number6->isPositive());

        $this->assertIsBool($number5->isPositive());
        $this->assertIsBool($number6->isPositive());

        $this->assertIsInt($number7, "Correcte");
        $this->assertIsNumeric($number8, "Correcte");
    }

}
?>