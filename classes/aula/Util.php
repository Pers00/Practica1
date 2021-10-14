<?php

namespace aula;

class Util {
    
    private function __construct() {
    }
    
    static function printVD($data) {
        echo self::prettyVardump($data);
    }

    static function prettyVardump($data) {
        return '<pre>' . var_export($data, true) . '</pre><br>';
    }
    
    static function enableErrors() {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        return __CLASS__ . ' ' . __METHOD__ . ' ' . __FILE__ . ' ' . __FUNCTION__ . ' ' . __LINE__ . '<br>';
    }
    
    static function read($name) {
        $value = self::check($name, $_POST);
        if($value == null) {
            $value = self::check($name, $_GET);
        }
        return $value;
    }
    
    static function check($name, $array) {
        $value = null;
        if(isset($array[$name])) {
           $value = $array[$name];
        }
        return $value;
    }
}