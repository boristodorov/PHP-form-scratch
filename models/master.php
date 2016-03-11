<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of master
 *
 * @author Boris
 */
namespace Models;

class Master_Model {
    protected $table;
    protected $limit;
    


    public function __construct($arg = array()) {
        $arg = array (
            'limit' => 0
        );
        
        if (!isset( $arg['table'] ) ) {
            die ('Table not defined');
        }
    }
}
