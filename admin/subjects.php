<?php 

require('../core/loader.php');

if ( empty($_GET) ){
    // index
    $query = new Query(Connection::connect($conf));

    $subjects = $query->get('subjects',['subjects_id','menue_name'],'1');
    
    render("subjects",$subjects);
}

else{
    
    // Add
    if ( !empty($_GET['f']) and  $_GET['f']=='add' ){
        render('subjects_add');
    } 

    // update
    if( !empty($_GET["id"]) ){
        $query = new Query(Connection::connect($conf));

        $subject = $query->find('subjects','subjects_id='.$_GET['id']);
        print_r($subject) ;
    }
}