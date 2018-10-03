<?php

 $reVgames = array("Resident Evil",
 "Resident Evil 2",
 "Resident Evil 3: Nemesis",
 "Resident Evil Code: Veronica X",
 "Resident Evil Zero",
 "Resident Evil: Remake",
 "Resident Evil 4",
 "Resident Evil 5",
 "Resident Evil: Revelations",
 "Resident Evil 6",
 "Resident Evil: HD Remaster",
 "Resident Evil: Revelations 2",
 "Resident Evil Zero HD Remaster",
 "Resident Evil 7: Biohazard",
 "Resident Evil Remake 2");

 //print_r($reVgames);

echo("<h2>Resident Evil Games</h2><br>");

echo("<ol>");
 
  for ($i=0; $i < count($reVgames) ; $i++) { 
    echo "<li> $reVgames[$i] </li>";
    echo "<br>";
  }

  echo("</ol>");

?>
