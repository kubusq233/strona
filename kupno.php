<?php 
		$con = mysqli_connect("localhost","root","","kiosk");

		$idt = @$_POST['idtowar'];
		$ilosc = @$_POST['ilosc'];

		$zap = "UPDATE towary SET ILOŚĆ = ILOŚĆ + '$ilosc', Suma = Suma - 3 * '$ilosc'  WHERE idTowar = '$idt';";

		$q = mysqli_query($con, $zap);

		if($q)
			{
				echo "Pomyślnie zakupiono itemy";
			}
		else 
			{
				echo "Nie udało się zakupić itemów";
			}

	mysqli_close($con);
?>