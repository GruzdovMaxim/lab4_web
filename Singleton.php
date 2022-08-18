<?php
	
	class Singleton
	{
		private static $var= null;
		private function __construct(){}
		private function __clone(){}
		public static function getVar(){
			if(self::$var === null){
				return self::$var= new self();
			}
			else
				return self::$var;
		}
		public function printTest(){
			return "<br>It works!<br>";
		}
	}


?>