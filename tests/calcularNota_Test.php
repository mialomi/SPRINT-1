<?php

include 'src/calcularNota.php';
use PHPUnit\Framework\TestCase;

class calcularNota_Test extends TestCase{

    /** @test *///        
    public function test1(){
        
        $nota1 = 8;
        $missatge = "L'alumne és de Primera Divisió.";
        $alumne1 = new calcularNota($nota1);
        $this->assertEquals($alumne1, $missatge, "Fals");   
    }
    public function test3(){
        $nota2 = 5;
        $missatge1 = "L'alumne és de Segona Divisió.";
        $alumne2 = new calcularNota($nota2);
        $this->assertEquals($alumne2, $missatge1, "Fals");
        
    }
    public function test4(){
        $nota3 = 6;
        $missatge2 = "L'alumne és de Tercera Divisió.";
        $alumne3 = new calcularNota($nota3);
        $this->assertEquals($alumne3, $missatge2, "Fals");
    }

    public function test5(){
        $nota4 = 6;
        $missatge3 = "L'estudiant reprovarà.";
        $alumne4 = new calcularNota($nota4);
        $this->assertEquals($alumne4, $missatge3, "Fals");
    }
    
    public function test6(){
        $this->assertDirectoryDoesNotExist('src/calcularNota.php');
        
    }
    public function test7(){
        $nota5 = 8;
        $this->assertIsNotNumeric($nota5, "Fals");

}


}
?>  
    

	

