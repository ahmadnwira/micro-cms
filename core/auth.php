<?php

  require_once 'helpers.php'  ;

  function log_in_admin($admin) {
    session_regenerate_id();
    $_SESSION['last_login'] = time();
    $_SESSION['mail'] = $admin['mail'];
    return true;
  }

  function log_out() {
    unset($_SESSION['last_login']);
    unset($_SESSION['mail']);
    return true;
  }


  function is_logged_in() {
    return isset($_SESSION['mail']);
  }

  function require_login() {
    if(!is_logged_in()) {
      redirect('login.php');
    } 
    else{
    }
  }