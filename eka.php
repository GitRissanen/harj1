    <?php include "menu.php"; ?>
    <h1>Assosiatiivinen array</h1>
    <?php
    $nimet = array(array("Etunimi"=>'Ville',"Sukunimi"=>'Virta'),
    array("Etunimi"=>'Kalle',"Sukunimi"=>'Järvi'),
    array("Etunimi"=>'Liisa',"Sukunimi"=>'Virta'),
    array("Etunimi"=>'Maija',"Sukunimi"=>'Joki')
    );
    ?>
    <h2>Koko taulukko</h2>
    <table border="1">
      <tr>
        <th>Etunimi</th>
        <th>Sukunimi</th>
      </tr>
      <?php
      foreach ($nimet as $rivi) {
        echo'<tr><td>'.$rivi["Etunimi"].'</td><td>'.$rivi["Sukunimi"].'</td></tr>';
      }
      ?>

    </table>
<?php include "footer.php"; ?>
