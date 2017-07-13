<?php 
    require('../core/loader.php') ;
       
if ($_SERVER['REQUEST_METHOD']=='GET') {

    render('login');
}

elseif ($_SERVER['REQUEST_METHOD']=='POST') {
    $query = new Query(Connection::connect($conf));

    $condtion = sprintf('mail="%s"',$_POST['mail']);

    $admin = $query->get('admins',['password'],$condtion);
    
    if (password_verify($_POST['password'],$admin[0]['password'])){
        log_in_admin($_POST);
        redirect('../admin');
    }

    else {
        render('login',['msg'=>'check mail and password again']);
    }
}