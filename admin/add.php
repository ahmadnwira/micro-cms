<?php

    require('../core/loader.php') ; 

    $table = clean_str($_POST['table']);
    unset($_POST['table']);

    $errors = validate($_POST);

    if (!empty($errors)){
        $data = ['errors'=>$errors];
        render($table.'_add',$data);
    }

    else{
        $query = new Query(Connection::connect($conf));

        $pages = $query->insert($table,$_POST);
        redirect('../admin');
    }