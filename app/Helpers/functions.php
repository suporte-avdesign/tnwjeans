<?php

/**
 * Return Json
 */
if ( !function_exists('typeJson'))
{
    function typeJson($array)
    {
       return json_decode(json_encode($array, FALSE));
    }
}








