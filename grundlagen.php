<?php // php -S 0.0.0.0:8000 

echo "Hello local Server";


echo "<br>";
var_dump(ini_get("memory_limit"));
var_dump(ini_get("max_execution_time"));
ini_set("max_execution_time",42);

var_dump(ini_get("max_execution_time"));

?>
<a href ="../applications.html">Applications</a>

<!-- HTML -->

<?php
    function hallo($parameter){
        return "Hallo ".$parameter;
    }

    function gruss($tageszeit){
        $gruss = "guten Tag!";
        $obst = null;
        if(in_array( $tageszeit,["Birne","Apfel","Bannane"] )){
            $obst = $tageszeit;
        }

        switch( $obst ){
            case 'Apfel':
                $gruss = $gruss.' Apfel übergeben!';
                break;
            case 'Birne':
                //break; weil because
            case 'Bannane':
                return "mit B ".$gruss;
                break;
            default:
                $gruss = $gruss.' '.$tageszeit;
        }


        return $gruss;
    }


    var_dump("aufruf Hallo: ", hallo("Du") );
$antwort = 42;
var_dump("<hr>Aufruf gruss: ",  gruss("Apfel") );
//var_dump("<hr>Aufruf gruss: ",  gruss("Birne") );

$eineFunktion = function() use($antwort) { return $antwort; };

$antwort = $antwort+2;

$meineFunktion = function($meine) use($antwort) { return $meine.' '.$antwort; };


var_dump( $eineFunktion() );
var_dump( $meineFunktion("meineFunktion") );

var_dump("Variable ? Funktion ", is_callable($eineFunktion),is_callable($antwort) );
// niels sagte get_type() is_calleble

$a = ["Birne","Apfel","Bannane"];
var_dump("?allesBirne ", in_array( "Birne",$a ) );

foreach($a as $index => $o){
    print($o.$index);
}


echo "<hr>Formular Übung und Superglobale Vaiabeln<br>";
var_dump("Post & GET Array: ",$_POST,$_GET);
echo("<br>Formulardaten: ".$_POST["txtid"]." ".$_POST["alterid"]);
echo '<br>grundlagen.php get name? ' . htmlspecialchars($_GET["name"]) . '!';
var_dump("ENDE");
?>
