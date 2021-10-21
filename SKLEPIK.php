<html>
<head>
	<title>SKLEPIK SZKOLNY</title>
	<meta charset="utf-8"/>
	<link href="styl.css" rel="stylesheet"/>
</head>
<body>
	<div id="baner">
		<h1>Nasz malutki sklep</h1>
	</div>
	
	<div id="kupno">
		<h1>WSZYSTKIE TOWARY KOSZTUJA TYLKO 3 ZL</h1>(zaufany sprzedawca)</br>
		<form action="kupno.php" method="POST">
		<h1>ZAKUP RZECZY</h1></br>
			ID Towaru: <input type="number" name="idtowar"/></br>
			Ilość: <input type="number" name="ilosc"/></br>
			<button type="submit"> ZAKUP </button>
	</form>

	</div>
	
	<div id="sklep">
		<h1>NASZ ASORTYMENT</h1></br>
		<table>
				<tr>
					<th>ID</th>
					<th>Nazwa</th>
					<th>Opis</th>
					<th>Cena</th>
					<th>Ilość</th>
					<th>Suma</th>
				</tr>
		</table>
<?php 
	$con = mysqli_connect("localhost","root","","kiosk");
	
	$zap = "SELECT * FROM towary";
	
	$q = mysqli_query($con, $zap);
	
	while ($row = mysqli_fetch_array($q))
		{
			echo "
			<table>
				<tr>
					<td>".$row['idTowar']."</td>
					<td>".$row['Nazwa']."</td>
					<td>".$row['Opis']."</td>
					<td>".$row['CENA']."</td>
					<td>".$row['ILOŚĆ']."</td>
					<td>".$row['Suma']."</td>
				</tr>
			</table>";
		}
	
	
	mysqli_close($con);
?>
	</div>
	
	<div id="sprzedaz">
		<form action="sprzedaz.php" method="POST">
	<h1>ILE I JAKIE RZECZY SPRZEDALISMY</h1></br>
ID Towaru: <input type="number" name="idtowar"/></br>
Ilość: <input type="number" name="ilosc"/></br>
<button type="submit">SELL </button>
</form>
	</div>
	
	<div id="stopka">
		<p>W razie jakikolwiek pytań prosimy o kontakt: </p>
		Telefon: 997</br>
		E-Mail: sip@policja.gov.pl<br/>
	</div>
</body>
</html>