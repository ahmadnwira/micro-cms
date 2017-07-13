<?php

class Query{
    
    function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function all($table){     

        $query = $this->pdo->prepare('select * from '.$table);

        $query->execute();
            
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function find($table,$condtion){
        
        $sql = sprintf('select * from %s where %s limit 1',$table,$condtion);
        

        $query = $this->pdo->prepare($sql);

        $query->execute();
            
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function get($table,$cols,$condtion){
        $sql = sprintf(
                'select %s from %s where %s',
                implode(', ', $cols), $table, $condtion );
        
        $query = $this->pdo->prepare($sql);

        $query->execute();
            
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function insert($table, $parameters){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } 
        catch (PDOException $e) {
             echo 'Connection failed: ' . $e->getMessage();
        }
    }  


    public function update($table, $col, $val, $condtion){
        $sql = sprintf(
            'update  %s set %s = "%s" where %s',
            $table,
            $col,
            $val,
            $condtion
        );

        $sql = $this->pdo->quote($sql);
        
        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } 
        catch (PDOException $e) {
             echo 'Connection failed: ' . $e->getMessage();
        }
    }  

    
    public function delete($table,$condtion){
        $sql = sprintf('delete from %s where %s',
            $table,$condtion);
        $sql = $this->pdo->quote($sql);
        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } 
        catch (PDOException $e) {
             echo 'Connection failed: ' . $e->getMessage();
        }
    }


    public function run_sql($sql){
 
        $query = $this->pdo->prepare($sql);

        $query->execute();
            
        return $query->fetchAll(PDO::FETCH_OBJ) ;
    }

}