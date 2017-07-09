<?php

    require('../core/loader.php') ; 

    $table = $_POST['table'];
    unset($_POST['table']);

    $query = new Query(Connection::connect($conf));

    $pages = $query->insert($table,$_POST);
    redirect('subjects.php');