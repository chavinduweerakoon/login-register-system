<?php
//require 'core/init.php';
//building the database wrapper for reusablity - pdo

class DB {     //pattern -singleon 

    private static $_instance = null ;  //static  prperty to store the instance of database
    private $_pdo , //pdo object
            $_query, //last query excuted 
            $_error = false, 
            $_results , //results sets
            $_count =0 ; //count of results


    private function __construct(){
        try{
            $this->_pdo = new PDO ('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db').'',Config::get('mysql/username'),Config::get('mysql/password'));
            echo 'connected';

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance =new DB ();
        }
        return self::$_instance;
    }




}