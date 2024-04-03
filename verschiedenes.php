<?php

$variable ="x";

function meineFunktion(){
    echo("Hello World!");
}

meineFunktion();
echo ( is_null($variable) );
echo($variable);

$meinArray = array(1,2,3);
foreach($meinArray as $v){
    echo("<br>".$v);
}

$assArray = [
    1 => 'a',
    2 => 'B',
    15 => 'C',
    'foo' => 'bar',
    'Keys können auch beliebige Strings sein' => true
];

echo("<br>");
var_dump( $assArray['15'],$meinArray );
?>

<hr/>
<ul>
<?php
foreach($assArray as $v){
?>
    <li><?=$v?></li>
<?php
}
?>
</ul>

<?php echo true ? "Ja":"Nein";
