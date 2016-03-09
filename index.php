<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('DX_ROOT_DIR', dirname( __FILE__ ) . '/');
define('DX_ROOT_PATH', basename(dirname( __FILE__ )) . '/');



$request = $_SERVER['REQUEST_URI'];
$request_home = '/' . DX_ROOT_PATH;

$controller = 'master';
$methods = 'index';
$param = array();

include_once 'controllers\master.php';

if (!empty($request)){
    if( 0 === strpos($request, $request_home )) {
        $request = substr($request, strlen($request_home));
        
        $components = explode('/', $request , 3);
        
        if ( 1 < count($components)){
            list( $controller , $methods) = $components;
            
            if (isset($components[2])){
                $param = $components[2];
            }
            include_once 'controllers/'. $controller . '.php';
        }
    }
}
$controller_class = '\Controllers\\' . ucfirst($controller) . '_Controller';

$instance = new $controller_class();

if (method_exists($instance, $methods)){
    
    call_user_func_array(array( $instance, $methods), array ($param)) ;
    
    
}