<?php

    $ContinentNames = array("NA"=>"North America", "SA"=>"South America", "EU"=>"Europe",
                            "AS"=>"Asia", "AF"=>"Africa", "AU"=>"Australia", "AN"=>"Antarctica");

    echo "User Name: ".$_POST['Name']."<br>";
    echo "Email: "."<a href=\"mailto:".$_POST['Email']."\">".$_POST['Email']."</a><br>";
    echo "Major: ".$_POST['Major']."<br>";
    echo "Continents Visited:";
    foreach ($_POST['Continents'] as $continent) {
        echo $ContinentNames[$continent]." ";
    }
    echo "<br>Comments: ".$_POST['Comments']."<br>";

?>
