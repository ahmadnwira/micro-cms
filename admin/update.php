<?php

    require('../core/loader.php') ; 

    $id = clean_str($_POST['id']);
    $table = clean_str($_POST['table']);
        $errors = validate($_POST);

    if (!empty($errors)){
        $data = ['errors'=>$errors];
        render($table.'_add',$data);
    }
    
    else{
        $query = new Query(Connection::connect($conf));

        $query->update('subjects','menue_name',
            $_POST['menue_name'],"id={$id}");
        
        $query->update('subjects', 'position',
            $_POST['position'],"id={$id}");
        
        $query->update('subjects', 'visibility',
            $_POST['visibility'],"id={$id}");
        
        redirect('subjects.php');
    }