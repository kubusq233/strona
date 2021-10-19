<?php 
		$con = mysqli_connect("localhost","root","","kiosk");

		$idt = @$_POST['idtowar'];
		$ilosc = @$_POST['ilosc'];

		$zap = "UPDATE towary SET ILOŚĆ = ILOŚĆ - '$ilosc', Suma = Suma + Cena * '$ilosc' WHERE idTowar = '$idt';";

		$q = mysqli_query($con, $zap);

		if($q)
			{
				echo "Pomyślnie sprzedano itemy";
			}
		else 
			{
				echo "Nie udało się sprzedać itemów";
			}
	
	
	mysqli_close($con);
?>