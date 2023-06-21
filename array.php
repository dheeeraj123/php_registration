<?php


$cars=array(
    array("volvo",22,18),
    array("BMW",15,13),
    array("saab",5,2),
    array("maruthi",17,15)
);
for($row=0; $row < 4; $row++){
    echo"<p><b>Row number $row</b></p>";
    echo "<ul>";
    for($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>