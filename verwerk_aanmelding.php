<?php
$wachtwoord1 = $_POST['wachtwoord1'];
$wachtwoord2 = $_POST['wachtwoord2'];

//echo $wachtwoord1."<br>";
//echo $wachtwoord2;

if ($wachtwoord1 == $wachtwoord2) {
  echo "wachtwoord gelijk";
}
else {
  echo "wachtwoord niet gelijk";
  header("location: index.php?error=1");
}
?>
