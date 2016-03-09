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
        echo "I am Artist index ()";
        include_once DX_ROOT_DIR . '/views/artists/index.php' ;
    }
    public function dva() {
        echo "I am Artist index ()";
        include_once DX_ROOT_DIR . '/views/artists/dva.php' ;
    }
    public function tri() {
        echo "I am Artist index ()";
        include_once DX_ROOT_DIR . '/views/artists/tri.php' ;
    }
}

