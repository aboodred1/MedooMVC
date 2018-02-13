<?php

$url_request = $_SERVER['REQUEST_URI'];
if (APP_PATH == '/') {
	$url_path = $url_request;
}
else {
	$url_path = str_ireplace(APP_PATH , '' , $url_request);
}

if ($url_path [0] == '/') {
    $url_path = substr ( $url_path, 1 );
  }
$url_param = explode('/', $url_path);
//print_r($url_param);

$c = $url_param[0] ? $url_param[0] : 'index';
$a = $url_param[1] ? $url_param[1] : 'index';

if ($url_param[2]) {
  for($i = 2; $i < sizeof ( $url_param ); $i = $i + 2) 
  {
    $params [$url_param [$i]] = (isset ( $url_param [$i + 1] )) ? $url_param [$i + 1] : '';
  }
  $_GET = transcribe( $params );
}