<?php

if(!empty($_POST['check_list'])) {

    require('../core/loader.php') ; 

    $query = new Query(Connection::connect($conf));
    foreach($_POST['check_list'] as $check) {
        $query->delete($_POST['table'],"id={$check}");  
    }
}

redirect('../admin');