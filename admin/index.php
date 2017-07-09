<?php

require('../core/loader.php') ; 

$sql = "select TABLE_NAME
        from INFORMATION_SCHEMA.TABLES
        where TABLE_TYPE =  'BASE TABLE'
        AND TABLE_SCHEMA =  'cms' " ;

$query = new Query(Connection::connect($conf));
$tables = $query->run_sql($sql);

render("admin",$tables); 