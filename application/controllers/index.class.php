<?php

use Controller\Controller;

class indexController extends Controller
{
	function index()
	{
		$datas['title'] = 'Medoo-MVC';

		$hello = new index();
		$datas['hello'] = $hello->hello();

		$lib_class = new a();
		$datas['hi'] = $lib_class->hi();

		$this->display( $datas );
	}

	function hi()
	{
		echo 'hi';
	}
}