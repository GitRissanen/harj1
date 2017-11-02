<?php include "menu.php";?>
<h1>GetEsimerkki</h1>
<form action="getesim.php" method="get">
  <table>
    <tr>
  <td><label for="en">Etunimi</label></td>
  <td><input name="en" id="en" type="text"></td>
    </tr>
    <tr>
  <td><label for="sn">Sukunimi</label></td>
  <td><input name="sn" id="sn" type="text"></td>
    </tr>
  </table>
  <input class="btn btn-primary" type="submit" name="btnSend" value="Submit">
</form>
<?php
if(isset($_GET["btnSend"])){
  $etunimi = $_GET["en"];
  $sukunimi = $_GET["sn"];

  echo 'Hello '.$etunimi.' '.$sukunimi;
}

?>
<?php include "footer.php";?>
