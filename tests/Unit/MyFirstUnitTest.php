<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Calculator;

class MyFirstUnitTest extends TestCase
{
    public function testTotal()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->calculateTotal(500,500) == 1000);
    }
    public function testRemainingMoney()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->remining_money(500, 200) == 300);
    }
    public function testSpendingPercentage()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->percentage(500, 350) == 70);
    }
    public function testNoIncomeZeroPercentage()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->NoIncomePercentage(2, 0) == 0);
    }
    
    
    



}
