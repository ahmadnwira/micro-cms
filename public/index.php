<?php

require('../core/loader.php') ; 

    $query = new Query(Connection::connect($conf));

    $subjects = $query->get('subjects',['id','menue_name','visibility'],'1');
    $data = ['subjects'=>$subjects];
    render("home",$data);

    if( isset($GET) and !is_blank($_GET['page'])){
        $content = $query->get('pages',['content'],'visibility=1 and id='.$_GET['page']);
        $data = ['content'=>$content] ;
        render('partial',$data) ;  
    }
