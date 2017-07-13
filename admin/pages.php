<?php 

require('../core/loader.php');

require_login();

// render<Index>
if ( empty($_GET) ){

    $query = new Query(Connection::connect($conf));

    $pages = $query->get('pages',['id','menu_name'],'1');
    $data = ['db'=>$pages];
    render("pages",$data);
}

// render<Add_form>
if ( !empty($_GET['f']) and  $_GET['f']=='add' ){
    render('pages_add');
}

// render<Update_form>
if( !empty($_GET["id"]) ){
    
    $id = clean_str($_GET['id']);


    $query = new Query(Connection::connect($conf));

    $page = $query->find('pages','id='.$id);
    
    $data = ['db'=>$page];
    render("pages_edit",$data);
}
