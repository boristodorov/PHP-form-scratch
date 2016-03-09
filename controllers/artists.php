<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artist
 *
 * @author Boris
 */
namespace Controllers;
class Artists_Controller {
    public function __construct() {
        echo "I am an artist ";
    }
    
    public function index () {
        
        $template_name = DX_ROOT_DIR . '/views/artists/index.php' ;
        include_once DX_ROOT_DIR . '/views/layouts/default.php' ;
    }
    public function dva() {
       
        $template_name = DX_ROOT_DIR . '/views/artists/dva.php' ;
        
       include_once DX_ROOT_DIR . '/views/layouts/default.php' ;
    }
    public function tri() {
       $template_name = DX_ROOT_DIR . '/views/artists/tri.php' ;
       include_once DX_ROOT_DIR . '/views/layouts/default.php' ;
    }
}

