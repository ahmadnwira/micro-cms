<?php 

require('../core/loader.php');

// render<Index>
if ( empty($_GET) ){

    $query = new Query(Connection::connect($conf));

    $pages = $query->get('pages',['pages_id','menu_name'],'1');
    
    render("pages",$pages);
}

// render<Add_form>
if ( !empty($_GET['f']) and  $_GET['f']=='add' ){
    render('pages_add');
}

// render<Update_form>
if( !empty($_GET["id"]) ){
    $query = new Query(Connection::connect($conf));

    $page = $query->find('pages','pages_id='.$_GET['id']);
    print_r($page) ;
}
