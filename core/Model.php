<?php 

namespace Model;

use Medoo\Medoo;

class Model extends Medoo
{
	private $database;
	
	private static $instance;
	
	public static function instance() {
		
		if (is_null(self::$instance)) {
			
			echo 'asdasdas';

			self::$instance = new Medoo([
				'database_type' => DATABASE_TYPE,
				'database_name' => DATABASE_NAME,
				'server' => DATABASE_SERVER,
				'username' => DATABASE_USER,
				'password' => DATABASE_PWD
			]);
		} 
	  
		return self::$instance;
	}
}