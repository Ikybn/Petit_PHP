<?php
$tab = array("kiwi","pomme","poire","litchi","rhubarbe");
$choice = "poire";
function searchingFruit ($tab,$choice){

foreach ($choice as $tab){
    if ($tab == $choice) {
    
    return "Le fruit à été trouvé" .$choice;
}
}
return "Recherche infructueuse" .$choice;
}

echo searchingFruit ($tab,$choice);

?>
