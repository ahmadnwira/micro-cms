<?php

    require('../core/loader.php') ; 

    $id = $_POST['id'];

    $query = new Query(Connection::connect($conf));

    $query->update('subjects','menue_name',
        $_POST['menue_name'],"id={$id}");
    
    $query->update('subjects', 'position',
        $_POST['position'],"id={$id}");
    
    $query->update('subjects', 'visibility',
        $_POST['visibility'],"id={$id}");
    
    redirect('subjects.php');