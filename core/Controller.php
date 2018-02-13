<?php 

namespace Controller;

class Controller
{
	//display templates function
	public function display( $data = NULL , $layout = NULL , $template = NULL )
	{
		if( $layout == null )
		{
			$layout_class = get_called_class();
			$layout_array = explode('Controller', $layout_class);
			$layout = $layout_array[0];
			//$layout = 'index';
		}
		
		$template = get('a') ? get('a') : 'index';
		$layout_file = AROOT . 'views/' . $layout . '/' . $template . '.php';
		if( file_exists( $layout_file ) )
		{
			@extract( $data );
			require( $layout_file );
		}
		else
		{
			$layout_file = CROOT . 'view/404.html';
			if( file_exists( $layout_file ) )
			{
				@extract( $data );
				require( $layout_file );
			}	
			else
			{
				echo 'file not found.';
			}
		}
	}
	
	public function run()
	{
		echo 'hello world!';
	}
}