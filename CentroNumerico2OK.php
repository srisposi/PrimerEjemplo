<?php
	// Este codigo ha sido generado por el modulo psexport 20180802-w32 de PSeInt.
	// Es posible que el codigo generado no sea completamente correcto. Si encuentra
	// errores por favor reportelos en el foro (http://pseint.sourceforge.net).

	$stdin = fopen('php://stdin','r');
	echo 'Un número: ',PHP_EOL;
	fscanf($stdin,"%f",$numero);
	$n = 2;
	for ($n=2;$n<=$numero;$n++) {
		$i = 0;
		$x = 0;
		$menor1 = 0;
		$mayor1 = 0;
		for ($i=0;$i<=$n-1;$i+=1 $hacer;) {
			$menor1 = $menor1+$i;
		}
		echo $menor1,PHP_EOL;
		for ($x=$n+1;$x<=$numero;$x+=1 $hacer;) {
			if ($menor1>$mayor1) {
				$mayor1 = $mayor1+$x;
				// Sino 
				// Si mayor1=menor1 Entonces
				// Escribir "Es Centro Numerico";
				// SiNo
				// Escribir "No es Centro Numerico";
				// FinSi
			}
		}
		echo $mayor1,PHP_EOL;
		if ($mayor1==$menor1) {
			echo 'Es centro numérico',PHP_EOL;
		} else {
			echo 'No es el centro numérico',PHP_EOL;
		}
	}
?>
