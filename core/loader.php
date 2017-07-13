<?php
    require_once 'helpers.php'  ;
    require_once 'db/Connection.php';
    require_once 'db/Query.php';
    require_once 'validation.php';
    require_once 'auth.php';

    $conf = require 'conf.php';

    $conf = $conf['db'] ;

    session_start();

?>
