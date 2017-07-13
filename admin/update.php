<?php

    require('../core/loader.php') ; 

    require_login();

    $id = clean_str($_POST['id']);
    $table = clean_str($_POST['table']);
        $errors = validate($_POST);

    if (!empty($errors)){
        $data = ['errors'=>$errors];
        render($table.'_add',$data);
    }
    
    else{
        $query = new Query(Connection::connect($conf));

        if(!is_blank($_POST['password'])){
            $_POST['password'] = password_hash($_POST['password'],PASSWORD_BCRYPT);
        }
        
        foreach ($_POST as $col=>$val) {
        
            $query->update($table,$col,$val,"id={$id}");
        
        }
        
        redirect('index.php');
    }