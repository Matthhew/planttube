<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<title>Odesílání emailu</title>
</head>
<body>
<h1>Odesílání emailu</h1>

<?
$predmet = $_POST['predmet'];
$email = $_POST['email'];
$spam = $_POST['spam'];
$zprava = $_POST['zprava'];

if ($predmet!="" and $email!="" and $zprava!="" and $spam=="2")
{
Mail("ukdejmek@seznam.cz", $predmet, $zprava, "From: " . $email);
echo "<p><strong>Váš e-mail byl úspěšně odeslán</strong>.</p>";
}
else
{
echo "<p>Váš e-mail se <strong>nepodařilo odeslat</strong> pravděpodobně jste nevyplnili všechny údaje, nebo nevíte kolik je 1 + 1.</p>";
}
?>

</body>
</html>
