<?php 

require('../core/loader.php');

require_login();


if ( empty($_GET) ){
    // index
    $query = new Query(Connection::connect($conf));

    $subjects = $query->get('subjects',['id','menue_name'],'1');
    $data = ['db'=>$subjects];
    render("subjects",$data);
}

else{
    
    // Add
    if ( !empty($_GET['f']) and  $_GET['f']=='add' ){
        
        $query = new Query(Connection::connect($conf));
        
        $subject = $query->run_sql(
                    'select COUNT(id ) as count from subjects'
            );

        $data = ['count'=>$subject];
        render("subjects_add",$data);
    } 

    // update
    if( !empty($_GET["id"]) ){
        $query = new Query(Connection::connect($conf));

        $subject = $query->find('subjects','id='.$_GET['id']);
        $data = ['db'=>$subject];
        render("subjects_edit",$data);
    }
}