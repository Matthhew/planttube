<? if ( Mail("moje@adresa", $predmet, $zprava, "From: " . $mail_odesilatele) )
echo "Mail byl odeslán";
else echo "Mail se nepodařilo odeslat"; ?>
