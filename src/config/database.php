<?php

class Database{
    public static function getConnection(){
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        //var_dump($envPath);
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['server'], $env['user'],$env['password'],$env['database']);

        if($conn->connect_error){
            
            die("Error: " . $conn->connect_error);
        }

        return $conn;
    }
    
    public static function getResultFromQuery($sql){
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
}