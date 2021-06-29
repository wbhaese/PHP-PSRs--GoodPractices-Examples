<?php

//two ways to decalre a new function

function myExample()
{
    return 'Good practice';
}

//to avoid double declaration:

if(!function_exists('bar')){
    function bar(){
        
    }
}