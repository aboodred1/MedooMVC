<?php
/*** Define app absolute root ***/
define( 'DS' , DIRECTORY_SEPARATOR );
define( 'WROOT' , dirname( __FILE__ ) . DS  );
define( 'AROOT' , 'application' . DS  );

/****  load core code  ***/
include_once( 'core'.DS .'init.php' );
