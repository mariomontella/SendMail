<?php
$a = 'mario.montella97@gmail.com';
$subject = 'Ciao da XAMPP!';
$messaggio = 'Questo è un test';
$headers = "Da: noreply@techmade.eu\r\n";
if (posta($a, $oggetto, $messaggio, $intestazioni)) {
   echo "SUCCESSO";
} altro {
   echo "ERRORE";   
}
