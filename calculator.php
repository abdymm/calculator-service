<?php

if(isset($_GET['ang1']) && isset($_GET['ang2']))
 {
	$ang1 = $_GET['ang1'];
	$ang2 = $_GET['ang2'];
	
	function tambah($a1,$a2)
	{
		$hasil = $a1+$a2;
		return $hasil;
	}
	function kurang($a1,$a2)
	{
		$hasil = $a1-$a2;
		return $hasil;
	}
	function kali($a1,$a2)
	{
		$hasil = $a1*$a2;
		return $hasil;
	}
	function bagi($a1,$a2)
	{
		$hasil = $a1/$a2;
		return $hasil;
	}
	
	if($_GET['operasi']=='tambah')
	{
		$hasil = tambah($ang1,$ang2);
	}
	else if($_GET['operasi']=='kurang')
	{
		$hasil = kurang($ang1,$ang2);
	}
	else if($_GET['operasi']=='kali')
	{
		$hasil = kali($ang1,$ang2);
	}
	else if($_GET['operasi']=='bagi')
	{
		$hasil = bagi($ang1,$ang2);
	}
	
 	$result = array();
	
	$result[] = array(
		'angka1' => $ang1,
		'angka2' => $ang2,
		'hasil' => $hasil
	);
	
	if($_GET['format'] == 'json') 
	{
		header('Content-type: application/json');
		echo json_encode(array('result'=>$result));
	}
	
	else {
		header('Content-type: text/xml');
		echo '<calculator>';
		echo '<calc>';
		echo '<angka1>';
		echo $ang1;
		echo '</angka1>';
		echo '<angka2>';
		echo $ang2;
		echo '</angka2>';
		echo '<hasil>';
		echo $hasil;
		echo '</hasil>';
		echo '</calc>';
		
		echo '</calculator>';
	}
	
}


?>