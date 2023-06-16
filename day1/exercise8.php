<?php
$colors = array("bleu", "rouge", "jaune");

foreach($colors as $value) {
if ($value  === "jaune") {
echo "La couleur préférée de Louis est le"  . $value . "<br/>";}
else if ($value === "rouge") {
echo "Pour sa peinture, Andrée a utilisé du " . $value . "<br/>";}
else {
echo "Anis n'a pas de chemise" . $value . "<br/>";
}
}
?>