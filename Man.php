
<?php
class Man extends Human{
		private $Name;
		public function get(){
			return parent::get($this->Age)."<br>Name: ". $this->Name;
			}
		function __construct($Age, $Name){
			parent::__construct($Age);
			$this->Name = $Name;
		}
		function __destruct(){
			echo "<br>destructor for Man";
		}
	}
	?>