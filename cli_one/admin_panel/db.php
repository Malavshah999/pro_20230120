<?php

$conn = mysqli_connect('localhost', 'garvjhan_atoz', 'htbvx11573', 'garvjhan_atoz');

//$conn = mysqli_connect('localhost', 'techshot_pawnestc_cio', 'd=ocNSnLxV9#', 'techshot_pawnestc_cio');

if (!$conn) {

    die('Could not connect: ' . mysqli_connect_error());

}



mysqli_select_db($conn,"DB_NAME");



mysqli_set_charset($conn,"utf8");



$perPage=50;



$is_debug = false;

if($is_debug === false){

    ini_set('memory_limit', '8192M');

    error_reporting(E_ALL ^ E_NOTICE);

    error_reporting(0);

    error_reporting(E_ERROR | E_PARSE);

}



?>