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
class Artists_Controller extends Master_Controller {
    public function __construct() {
        
        parent::__construct('/views/artists/');
    }
    
    public function index () {
        
        $template_name = DX_ROOT_DIR . $this->views_dir . 'index.php' ;
        include_once $this->layout;
    }
    public function dva() {
       
        $template_name = DX_ROOT_DIR . $this->views_dir .'dva.php' ;
        
       include_once $this->layout;
    }
    public function tri() {
       $template_name = DX_ROOT_DIR . $this->views_dir .'tri.php' ;
       include_once $this->layout ;
    }
}

