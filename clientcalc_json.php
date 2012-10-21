<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#hitung').click(function()
		{
			$.getJSON("http://localhost/webservicePHP/calculator.php?ang1="+$('#angka1').val()+"&ang2="+$('#angka2').val()+"&operasi="+$('#operator').val()+"&format=json",function(data)
			{
				$.each(data.result,function(i,data)
				{	
					var angka1 = data.angka1;
					var angka2 = data.angka2;
					var hasil = data.hasil;
					$('#hasil').html("Hasil = "+hasil);
				});
			});
			return false;
		});
	});
</script>

<form action="clientcalc.php" method="post">
	<label>
		Angka 1 : 
	</label>
	<input type="text" name="ang1" id="angka1"/>
	<br>
	<label>
		Operator : 
	</label>
	<select name="operator" id="operator">
		<option value="tambah">+</option>
		<option value="kurang">-</option>
		<option value="bagi">/</option>
		<option value="kali">x</option>
	</select>
	<br>
	<label>
		Angka 2 : 
	</label>
	<input type="text" name="ang2" id="angka2"/>
	<br>
	<input type="Submit" value="HITUNG" id="hitung">
</form>
<div id="hasil">
</div>