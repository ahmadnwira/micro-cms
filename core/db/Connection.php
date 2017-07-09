<?php

class Connection{

    public static function connect($conf){

        try{

           return new PDO( 
                    
                    'mysql:host=127.0.0.1' . ';dbname=' . 'cms', 
            
                    'root',
                    
                    'pass'
                );
        }

        catch(PDOException $e){
            
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

}