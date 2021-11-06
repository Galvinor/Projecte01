<?php

function getRoute():string{

    if (isset($_REQUEST['url'])){
        $url=$_REQUEST['url'];
    }else {
        $url='home';
    }
    switch($url){
        case 'login':
            return 'login';
        case 'register':
            return 'register';
        case 'login_action':
            return 'login_action';
        case 'register_action':
            return 'register_action';
        case 'dashboard':
            return 'dashboard';
        case 'badlogin':
            return 'badlogin';
        case 'logout':
            return 'logout';
        case 'createlist':
            return 'createlist';
        case 'createlist_action':
            return 'createlist_action';
        case 'createtask':
            return 'createtask';
        case 'createtask_action':
            return 'createtask_action';
        default:
            return 'home';
    }
    
}