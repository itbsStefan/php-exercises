<?php // php -S 0.0.0.0:8000 

echo "Hello local Server";


echo "<br>";
var_dump(ini_get("memory_limit"));
var_dump(ini_get("max_execution_time"));
ini_set("max_execution_time",42);

var_dump(ini_get("max_execution_time"));

?><a href ="../applications.html">Applications</a>


<?php
    function hallo($parameter){
        return "Hallo ".$parameter;
    }

    function gruss($tageszeit){
        $gruss = "guten Tag!";

        if(true){

        }

        return $gruss;
    }


    var_dump("aufruf Hallo: ", hallo("Du") );
$antwort = 42;

$eineFunktion = function() use($antwort) { return $antwort; };

$antwort = $antwort+2;

$meineFunktion = function($meine) use($antwort) { return $meine.' '.$antwort; };


var_dump( $eineFunktion() );
var_dump( $meineFunktion("meineFunktion") );
?>
