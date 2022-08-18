<?php

	//---------- Variables, arithmetic operations and concatenation ----------
	echo "Variables, arithmetic operations and concatenation: <br>";
	$num1 = 10;
	$num2 = 20.5;
	$result = $num1 + $num2;
	$string = "Result: ";
	$string .= $result."<br>";
	echo "Variable №1 = ".$num1."<br>";
	echo "Variable №2 = ".$num2."<br>";
	echo $string;
	
	//------------------------------ Casting types ------------------------------
	echo "<br>Casting types:<br>";
	echo 10 + "000";
	echo "<br>";
	echo 10 . "000";
	echo "<br>";
	echo 1 + 2.2;
	echo "<br>";
	echo 1 . 2.2;
	echo "<br>";
	echo "23.2" + "46";
	echo "<br>";
	echo "23.2" . "46";
	echo "<br>";
	
	//-------------------- Denomination of variables ---------------------
	echo "<br>Denomination of variables:<br>";
	$number1 = 1;
	$denomination = "number1";
	echo $denomination." = ".$number1."<br>";
	echo $$denomination." = ".$number1."<br>";
	
	//---------- Conditional statements and comparison --------------------
	echo "<br>Conditional statements and comparison:<br>";
	$num1 = 1;
	$num2 = 2;
	$num3 = 1.0;
	echo "Variable №1 = ".$num1."<br>";
	echo "Variable №2 = ".$num2."<br>";
	echo "Variable №3 = ".$num3." (1.0)<br>";
	if ($num1 > $num2)
		echo $num1." is bigger than ".$num2."<br>";
	else if ($num1 < $num2)
		echo $num1." is lower than ".$num2."<br>";
	
	echo  $num1 == $num2 ? $num1." is equal ".$num2."<br>" : $num1." is not equal  ".$num2."<br>";
	
	if ($num1 == $num3)
		echo $num1." is equal ".$num3."<br>";
	else if ($num1 != $num3)
		echo $num1." is not equal  ".$num3."<br>"; 
	
	if ($num1 === $num3)
		echo $num1." is equal ".$num3."<br>";
	else if ($num1 !== $num2)
		echo $num1." is not equal  ".$num3."<br>"; 
		
	//-------------------- For and foreach --------------------
	echo "<br>For and foreach:<br>";

	$array = [10, 20, 30, 40, 50, 60, 70 ,80];
	
	for($i =0; $i<count($array); $i++){
		$array[$i] += $i;
		echo "array[".$i."] = ".$array[$i]."<br>";
	}
	echo  "<br>";
	
	foreach($array as $i)
		echo " ".$i;
	echo  "<br>";
	
	// ---------------------Hash array---------------------------
	echo "<br>Hash array:<br>";
	$harray = [ "Lorem" => "Ipsum",
				"meters" => 1000,
				"language" => "english",
				"Yes?" => "No"];
		
	foreach($harray as $key => $value)
		echo $key." => ".$value."<br>";
	//--------------------Explode, implode------------------------
	echo "<br>-Explode, implode:<br>";
	$string = "Nulla commodo tristique elementum. Morbi at tellus luctus, auctor ligula eleifend, bibendum est.";
	$array = explode(" ", $string);
	for($i =0; $i<count($array); $i++){
		echo $array[$i]." ";
	}
	$array = implode(" ",$array);
	echo "<br><br>".$array."<br>";
	
	//--------------------Classes------------------------
	require_once "Human.php";
	$h1 = new Human(29);
	echo "<br>".$h1 -> get();
	require_once "Man.php";
	$h2 = new Man(19, "Max");
	echo "<br>".$h2 -> get();
	//-----------------Singleton---------------------
	require_once "Singleton.php";

	$s1 = Singleton::getVar();	
	$s2 = Singleton::getVar(); 
	echo $s1->printTest();
	echo $s2->printTest();
	if($s2 === $s1)
		echo '<br>$s1 === $s2<br>';



?>