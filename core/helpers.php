<?php
/**
  this file hostes all of common functionality except for 

  database <database hlpers in db/ >

  @Author : Ahmed Salah  'ahmed22502@gmail.com'
  @version 0.2

*/


/**
  @template_name <string>
  @data <associative_array> to pass data from controller to templates

  return  <template> which is a php file

*/      
function render($template_name, $data){
    return require ("templates/{$template_name}.template.php") ;
}


function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  echo "
            <div style=
                  'text-align:center;
                  color:#fff;background-color:#617b9b;
                  min-height: 100%;
                  font-weight:100;
                  text-transform:uppercase'>
            
            <h1 style='padding-top:25%;font-size:34px'>404</h1>
            <p> page not found <p>
            </div>
      " ;
  exit();
}

/**
  @path <string> eg 'index.php'
*/
function redirect($path){
      header("Location: ". $path );
      exit();
}