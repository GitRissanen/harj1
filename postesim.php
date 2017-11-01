<?php include "menu.php";?>
<h1>PostEsimerkki</h1>
<form action="postesim.php" method="post">
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
  <input type="submit" name="btnSend" value="Submit">
</form>
<?php
if(isset($_POST["btnSend"])){
  $etunimi = $_POST["en"];
  $sukunimi = $_POST["sn"];

  echo 'Hello '.$etunimi.' '.$sukunimi;
}

?>
<?php include "footer.php";?>
