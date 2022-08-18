<?php

class Human{
		private $Age;
		
		public function get(){
			return "Age: ".$this->Age;
		}
		function __construct($Age){
			$this->Age = $Age;
		}
		function __destruct(){
			echo "<br>destructor for Human";
		}
}



?>