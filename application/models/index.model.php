<?php

use Model\Model;

class index extends Model
{
	public function hello()
	{
		$datas[0] = 'This is function hello() of model index.';
		$datas[1] = 'datas from database.';
		
		$datas1 = self::instance()->select("van_vendors", "*");
		
		$datas2 = self::instance()->select("van_vendors", "*");
		
		$datas3 = self::instance()->select("van_vendors", "*");
		
		$datas4 = self::instance()->select("van_categories", "*");
		
		return array(
			$datas1,
			$datas2,
			$datas3,
			$datas4
		);
	}
}