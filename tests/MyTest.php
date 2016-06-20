<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User1;

class MyTest extends TestCase
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
     public function providerAllUrisWithResponseCode()
    {
        return [
            ['/', 200],
            ['/thank', 200],
            ['/non-existing', 404],
        ];
    }

    public function testDisplayThankYou($value='')
    {
        $this->visit('/thankyou')
        ->see('THank you!');
    		
    }


    public function testNewUserRegistration()
	{
    	$this->visit('/')
         ->type('Taylor', 'name')
         ->type('taylor@talor.com', 'email')         
         ->press('Register')
         ->seePageIs('/thankyou');
	}

    public function testPageControllerGet()
    {
        $this->call('GET', '/');
    }

	public function testPageControllerGettoThankYou()
	{
	    $this->call('GET', 'thankyou');
	}

	public function testUser1ControllerPost()
	{
	    $response= $this->call('POST', '/');
	}


}
