<h2>
reguläre Ausdrücke
</h2>
<?php
$langerText="
pattern
The pattern to search for, as a string.

subject
The input string.

matches
If matches is provided, then it is filled with the results of search. $matches[0] will contain the text that matched the full pattern, $matches[1] will have the text that matched the first captured parenthesized subpattern, and so on.

flags
flags can be a combination of the following flags:

Return Values ¶
preg_match() returns 1 if the pattern matches given subject, 0 if it does not, or false on failure.
34
Warning
This function may return Boolean false, but may also return a non-Boolean value which evaluates to false. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.
";

$zeichenkette = "test fTest 123";
$muster = "/[234]+/";
$muster = "* [A-Z].*";
$muster = "*www*";
$matches=[];

$frage = preg_match($muster,$zeichenkette, $matches);
$frage = preg_match($muster,$langerText, $matches);


if($frage){
    print("mit ".$muster);
}else{
    echo("ohne ".$muster);
}


?>

