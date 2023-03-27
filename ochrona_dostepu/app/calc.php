<?php
//Kontroler
require_once dirname(__FILE__).'/../config.php';
@$ilosc = $_REQUEST['ilosc'];
@$lata = $_REQUEST['lata'];
@$oprocentowanie = $_REQUEST['oprocentowanie'];



if ( ! (isset($ilosc) && isset($lata) && isset($oprocentowanie) &&isset($_GET['submit'])) ) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $ilosc == "" &&isset($_GET['submit'])) {
	$messages [] = 'Nie podano ilości';
}
if ( $lata == ""&&isset($_GET['submit']))  {
	$messages [] = 'Nie podano lat';
}
if ( $oprocentowanie == "" &&isset($_GET['submit'])) {
	$messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {
	
	
	if (! is_numeric( $ilosc )) {
		$messages [] = 'Ilosc nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $lata )) {
		$messages [] = 'Lata nie są liczbą całkowitą';
	}	
    if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}	
}




if (empty ( $messages )) { 

	
	$ilosc = intval($ilosc);
	$lata = intval($lata);
    $oprocentowanie = intval($oprocentowanie);

	 
	 $miesieczne_oprocentowanie = $oprocentowanie / 1200; //  dzielmy przez 1200 ponieważ potrzebujemy oprocentowania w  miesiącach
	 $miesioce = $lata * 12;

    //operacja
    $miesieczna_stopa = $ilosc * ($miesieczne_oprocentowanie + ($miesieczne_oprocentowanie / (pow(1 + $miesieczne_oprocentowanie, $miesioce) - 1)));
    //echo "Miesięczna rata: " . number_format($miesieczna_stopa, 2) . " zł";
}
include 'calc_view.php';