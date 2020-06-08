<?php

/**
 * Class APiTest
 *
 * @package Ulink
 */

use PHPUnit\Framework\TestCase;

/**
 * api test case.
 */
class APiTest extends TestCase{
    
    public function test_Api_resource(){

   
    $response = UlinkUrl::fetch();
     $this->assertEquals(200, $response['response']['code']);
  

    }
    
    
}