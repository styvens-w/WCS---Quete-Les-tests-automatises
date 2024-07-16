<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void {
        // Arrange
        $firstValue = 5;
        $secondValue = 3;
        $expectedResult = 15;

        // Act
        $calculator = new Calculator();
        $product = $calculator->multiplication($firstValue, $secondValue);

        // Assert
        $this->assertSame($expectedResult, $product, "La méthode multiplication() ne renvoie pas le bon résultat.");
    }

    public function testIsEven(): void {
        // Arrange
        $evenValue = 4;
        $oddValue = 5;

        // Act & Assert
        $calculator = new Calculator();
        $this->assertTrue($calculator->isEven($evenValue), "La méthode isEven() devrait renvoyer true pour un nombre pair.");
        $this->assertFalse($calculator->isEven($oddValue), "La méthode isEven() devrait renvoyer false pour un nombre impair.");
    }
}