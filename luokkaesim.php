<?php include "menu.php";?>

<h1>PHPClass Esimerkki</h1>
Opiskelijat ovat:<br>
<?php
include "opiskelija.php";
$opiskelijat = new Opiskelija();
foreach ($opiskelijat->getNames() as $rivi) {
  echo $rivi["Etunimi"].' '.$rivi["Sukunimi"];
  echo'<br>';
}
?>

<?php include "footer.php";?>
