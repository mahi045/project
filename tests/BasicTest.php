$this<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testBasicExample()
    {
    	$this->visit('/')->see('Laravel');
    	$this->visit('/course')->see('Laravel');
    	$this->visit('/course/72')->see('Laravel')->dontsee('Laravel 5');
    	$this->visit('/course/72')->click('Show Image')->seePageIs('/image/72/edit');
    	$this->visit('/course/72')->click('Show Room')->seePageIs('/room/72/edit');
    	$this->visit('/feedback?72')->click('FINISH')->seePageIs('/course');
    	$this->visit('/feedback?72')->click('All Hotels')->seePageIs('/course');
    	$this->visit('/course')->click('Login')->seePageIs('/login');
    	$this->visit('/feedback?72')->type('7 star Hotel','Hotel_Name')
    								->type('Mahi','User_Name')->type('Very nice place','Comment')
    								->press('UPLOAD THE COMMENT')->seePageIs('/course');
    	

    }
}
