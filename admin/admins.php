<?php 

require('../core/loader.php');

require_login();
    
if ( empty($_GET) ){
    // index
    $query = new Query(Connection::connect($conf));

    $subjects = $query->get('admins',['id','mail'],'1');
    $data = ['db'=>$subjects];
    render("admins",$data);
}

else{
    
    // Add
    if ( !empty($_GET['f']) and  $_GET['f']=='add' ){
        
        render("admins_add",$data);
    } 

    // update
    if( !empty($_GET["id"]) ){
        $query = new Query(Connection::connect($conf));

        $admin = $query->find('admins','id='.$_GET['id']);
        $data = ['db'=>$admin];
        render("admins_edit",$data);
    }
}
