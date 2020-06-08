<?php
/* 
author : shadrach
description : a simple class to prevent direct access
*/

class Init {


    public function __construct()
    {
        
        if ( ! defined( 'ABSPATH' ) ) {

            exit;
        
        }
    }

}

//new Init();