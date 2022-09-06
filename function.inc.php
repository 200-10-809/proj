<?php

// ----------------------------display array structure----------------------------------
function pr($arr){
    echo '<pre>';
    print_r($arr);
}

function prx(){
    echo '<pre>';
    print_r($arr);
    die();
}
//--------------------------------------------------
function get_safe_value($conn,$str)
{
    if($str !='')
    {
         return mysqli_real_escape_string($conn,$str);
    }
}
?>