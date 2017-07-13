<?php

    require('../core/loader.php') ; 

    require_login();


    $table = clean_str($_POST['table']);
    unset($_POST['table']);

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
        $pages = $query->insert($table,$_POST);
        redirect('../admin');
    }