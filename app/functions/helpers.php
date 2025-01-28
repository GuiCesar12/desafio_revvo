<?php
function dd($dump){
    var_dump($dump);
    die();
}
function base_path(){
    return dirname(__FILE__, 3);
}