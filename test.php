<?php
	$huruf = 'A';
	$nama = 'Asdas';
	$kalimat = 'haha "dfdf" df';
	$angka = 123;
	$bolenan = true;
	$kd = 2.4;

	$test1 = 'wwwwwwwwwwwww';
	$test2 = "wwwwwwwwwwwww";

	$arr = array("a", "b", "c", "d");
	$ar = ['a','b','ds']; //array versi baru

	var_dump($huruf);
	echo "<br>";
	var_dump($nama);
	echo "<br>";
	var_dump($kalimat);
	echo "<br>";
	var_dump($angka);
	echo "<br>";
	echo $angka;
	echo "<br>";
	var_dump($bolenan);
	echo "<br>";
	echo $bolenan;
	echo "<br>";
	var_dump($kd);
	echo "<br>";

	////////////////////////////

	echo " = $test1"; //wwwwwwwwwwwwww
	echo "<br>";
	echo " = $test2"; //wwwwwwwwwwwwwww
	echo "<br>";
	echo ' = $test1'; //test1
	echo "<br>";
	echo ' = $test2'; //test2
	echo "<br>";


	/////////////////////////////////////////////////

	

	echo $arr[1],$arr[0];
	echo "<br>";
	echo $ar[2];
?>