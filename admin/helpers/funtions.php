<?php
function getValue($name, $method='get', $default=''){
    $method = strtolower($method);
    switch ($method){
        case 'post': $return = isset($_POST[$name])?$_POST[$name]:$default;
        break;
        case 'session':
            $return = isset($_SESSION[$name])?$_SESSION[$name]:$default;
            break;
        case 'get' : $return = isset($_GET[$name])?$_GET[$name]:$default;
        break;
        default : $return = $default;
    }
    return $return;
}