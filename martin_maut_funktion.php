
<!-- 
 Aufgabe Maut
Für ein Unternehmen soll ein Programm entwickelt werden, welches für
erfasste LKW automatisch die entsprechenden Mautgebühren berechnet.
Schadstoffklasse A   B   C   D
Bis 3 Achsen     12  15  16  18
Ab 4 Achsen      13  16  17  19
Angaben in Cent/km
Schreiben Sie eine Funktion, die nach der oben beschriebenen Regel die Maut
für eine Fahrt berechnet!   
 -->
 <?php
$EINHEIT = "Cent/km";
$sklasse = ["A","B","C","D"];
$b3Achsen = ["12","15","16","18"];
$a4Achsen = ["13","16","17","19"];

function maut() {
    $result = "noch zu programmieren";

    return $result;
}

echo maut();
