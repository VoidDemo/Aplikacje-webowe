<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel=stylesheet type="text/css" href="../css/szablon.css">
</head>
<body>
    <div class="header">
    
    
    
    </div>
    <div class="title"> 
        <h1 >Kalkulator kredytowy</h1>
    </div>
   
    <div class="form">
        <form action="calc.php" method="get">
            <label>Kwota kredytu:</label> <br>
            <input type="text" name="ilosc" class="input" value="<?php if (isset($ilosc)) print($ilosc); ?>"><br>

            <label>Liczba lat:</label> <br>
            <input type="text" name="lata" class="input" value="<?php if (isset($lata)) print($lata); ?>"><br>

            <label>Oprocentowanie (w %):</label> <br>
            <input type="text" name="oprocentowanie" class="input" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>"><br>

            <input type="submit" class="button" value="Oblicz">
        </form>
    
    
   
    
    
    
    
    
    </div>
    <div class='error'>
     <?php

        if (isset($messages)) {
            if (count ( $messages ) > 0) {
                echo '<ol>';
                foreach ( $messages as $key => $msg ) {
                    echo '<li>'.$msg.'</li>';
                }
                echo '</ol>';
            }
        }
        ?>
        
    </div>
        <?php if (isset($miesieczna_stopa)){ ?>
            <div class='mes'>
        <?php  
                echo 'Miesięczna rata: : '. number_format($miesieczna_stopa, 2) . " zł"; ?>
            </div>
    <?php } ?>    


    <div class='footer'>
        Przykładowy tekst, byle by tylko zapełnić czymś diva.<br>
        Taki sobie teskt o niczym
    </div>
</body>
</html>