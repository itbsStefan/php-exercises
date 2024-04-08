<?php
/*

1. Was habe ich gegeben?

Eine Zeichenkette (string)

2. Was will ich erreichen?

Funktion, die den String in umgekehrter Richtung zurück gibt.

*/
function solution($str): string {
  
  $reversed = "";
  
  /*
  3. Wie kann ich das erreichen?

  Muss ich etwas entscheiden/unterscheiden? Nö.
  Muss ich etwas wiederholen? Ja, die Zeichen meines Strings.
  => Schleife!
  Muss ich etwas zählen? Joa.
  Muss ich etwas ablaufen? Joa.
  => for-Schleife!
 */
  
  /*
  String: hello
  Index:  01234
  */
  $length = strlen($str); // Berechnet Länge des Strings
    
  for (
    $index = ($length - 1); // Hier geht's los
    $index >= 0; // Solange machen wir das
    $index = ($index - 1) // In jedem Schritt um Eins herunter zählen
  ) {
    /*
    1. Was habe ich gegeben?
    
    Index $index, z.B. 4
    Länge $length, z.B. 5
    String $str, z.B. "hello"
    Ergebnis $reversed, z.B. ""
    
    2. Was will ich erreichen?
    
    Aktuelles Zeichen an Ergebnis anhängen.
    
    */
    $char = $str[$index]; // Aktuelles Zeichen
    $reversed .= $char; // an Ergebnis anhängen
  } // Ende des Schleifenkörpers
  
  return $reversed;
}

echo solution("FreiBierf")."\n";
