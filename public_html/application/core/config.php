<?php

class Config{
	public static function get($item){
		$index = explode('.', $item);
		$elem = require('/../.env.php');
		foreach ($index as $depth) {
			$elem = $elem[$depth];
		}
		return $elem;
	}
}