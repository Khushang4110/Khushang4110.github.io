<?php
	$age=array("0"=>"Hello","xyz"=>12,"pqr"=>20);
	$age["abc"]="25";
	echo $age["abc"]."<br>";
	print_r($age);


	$stud = array('AWT' =>95,'Python'=>92,'DAA'=>80);
	$stud_two["Maths"]=95;
	$stud_two["chem"]=52;

	echo "<br>"; print_r($stud); 
	echo "<br>"; print_r($stud_two);
	echo "<br>";echo "<br>";

	foreach ($stud as $s => $marks) {
		echo "student 1 got ".$marks." in ".$s."<br>";
	}
	$sum=0;
	foreach ($stud as $s => $marks) {
		$sum+=$marks;
	}
	echo "Total marks are ".$sum."<br>";
	echo "Avg is ".$sum/sizeof($stud)."<br>";

	$contacts=array(array("name"=>"Peter Parker","email"=>"peter@gmail.com"),array("name"=>"John Doe","email"=>"johndoe@gmail.com"));

	echo "Peter Parker's email id is ".$contacts[0]["email"];
	echo "<pre>";
		print_r($contacts);
	echo "</pre>";

	$temp = array(
		array(1," ABC ",5000),
		array(1," XYZ ",15000),
		array(1," PQR ",50000),
	);

	for($row=0; $row<sizeof($temp); $row++)
	{
		for($col=0;$col<sizeof($temp[$row]); $col++)
		{
			echo $temp[$row][$col];
		}
		echo "<br>";
	}
	echo "<br>";
	$ar["abc"]=100;
	$ar[1]="php";
	$ar[11.8]="xyzzz";
	$ar["avx"]="pqr";

	foreach ($ar as $a => $value) {
		echo $a."=>".$value."<br>";
	}
	echo "<br>";
	print_r($ar);
	echo "<br><hr>";
	var_dump($ar);
	echo "<br><br>";

	echo "sort <br>";
	sort($stud);
	print_r($stud);
	echo "<br><hr>";

	echo "rsort <br>";
	rsort($stud);
	print_r($stud);
	echo "<br><hr>";

	echo "asort <br>";
	asort($stud);
	print_r($stud);

	echo "<br><hr>";
	echo "ksort <br>";
	ksort($stud);
	print_r($stud);

	echo "<br><hr>";
	echo "arsort <br>";
	arsort($stud);
	print_r($stud);

	echo "<br><hr>";
	echo "krsort <br>";
	krsort($stud);
	print_r($stud);
?>
