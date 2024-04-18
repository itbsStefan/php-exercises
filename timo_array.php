

1. Erstelle ein indiziertes Array mit einigen Lebensmittelnamen.
2. Entferne ein Element aus der Mitte des indizierten Arrays mit array_slice().
3. Füge ein neues Element am Ende des indizierten Arrays hinzu.

<?php

$a = [
    "Butter",
    "Mehl",
    "sinnlos",
    "Milch",
    "Eier",
];

$entfernt = array_splice($a,2,1);
$entfernt[] = array_splice($a,-1,1,["Straußenei","Spatzeneier"]);

$a[] = "Wasser";

//var_dump($a);
print_r($a);
echo "entferte Elemente ";
var_dump($entfernt);

?> 

1. Erstelle ein assoziatives Array mit Lebensmitteln als Schlüssel
und deren Menge als Wert.
2. Ändere die Menge eines Lebensmittels im assoziativen Array.
3. Füge ein neues Lebensmittel mit Menge zum assoziativen Array hinzu.

<?php
$b = [
    "Mehl"   => 0.5,
    "Wasser" => 0.2,
    "Milch"  => 1,
    "Eier"   => 5,  
];

$b["Milch"]    = 1.5;
$b["Erdberen"] = 15;

//var_dump($b);
print_r($b);

