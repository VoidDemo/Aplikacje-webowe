<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
</head>
<body>
    <h1>Kalkulator kredytowy</h1>
    <form action="<?php print(_APP_URL);?>/app/calc.php" method="get">
        <label>Kwota kredytu:</label> <br>
        <input type="text" name="ilosc" value="<?php if (isset($ilosc)) print($ilosc); ?>"><br>

        <label>Liczba lat:</label> <br>
        <input type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>"><br>

        <label>Oprocentowanie (w %):</label> <br>
        <input type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>"><br>

        <input type="submit" name="submit" value="Oblicz">
    </form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

    <?php if (isset($miesieczna_stopa)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata: : '. number_format($miesieczna_stopa, 2) . " zł"; ?>
</div>
<?php } ?>

</body>
</html>