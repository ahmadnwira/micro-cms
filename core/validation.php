<?php

function is_blank($value){
    return !isset($value) || trim($value)=="" ;
}

function min_length($value, $min) {
    $length = strlen($value);
    return $length > $min;
}

function max_length(){
    $length = strlen($value);
    return $length < $max;
}

/* this function is not intended to be used for santization for SQL 
    it should be used to validate data that will be represented to user
 */
function clean_str($value){
   $value = trim($value) ;
   return  htmlspecialchars($value) ;
}


function validate($form_fields){
    $errors = [];

    foreach ($form_fields as $key=>$field) {
        if (is_blank($field)){
            $errors[$key]='empty';
        }
    }

    return $errors;
}
