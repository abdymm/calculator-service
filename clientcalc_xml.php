
<form action="clientcalc.php" method="post">
	<label>
		Angka 1 : 
	</label>
	<input type="text" name="ang1"/>
	<br>
	<label>
		Operator : 
	</label>
	<select name="operator">
		<option value="tambah">+</option>
		<option value="kurang">-</option>
		<option value="bagi">/</option>
		<option value="kali">x</option>
	</select>
	<br>
	<label>
		Angka 2 : 
	</label>
	<input type="text" name="ang2"/>
	<br>
	<input type="Submit" value="HITUNG">
</form>

<?php
	if(isset($_POST['ang1']) && isset($_POST['ang2']))
	{
	$url = "http://localhost/webservicePHP/calculator.php?ang1=".$_POST['ang1']."&ang2=".$_POST['ang2']."&operasi=".$_POST['operator'];
	$calc = simplexml_load_file($url);
		
	
		foreach($calc as $row)
		{
			$output[] = array(
				'hasil' => $row->hasil
			);
				
		}
		
	
	foreach($output as $result)
	{
		$hasil = $result['hasil']."<br>";
	}
	echo "Hasil = ".$hasil;
	}
	
?>