<?php

/**
 * Schreibe je eine Funtion add, substract, multiply, divide, die die
 * jeweilige Grundrechenart auf die beiden übergebenen Parameter A und B
 * anwendet. Verwende Arrow-Funktionen.
 */
// ...
$nix = null;
$A = 5;
$B = 8;
// ...
$add = function($A,$B) use($nix) { return $A+$B; };

$meineFunktion = function($a) use($nix) {
    //use global $nix;
     return $a.' '.$nix; 
};
print( "addiere ".$add(1,2)."\n" );
// ...
$substract = function($a,$b){
    return $a-$b; 
};
print( "minus ".$substract(2,1)."\n" );
// ...
$multiply = function($a,$b) use($nix) { return $a*$b; };
print_r( "multiply ".$multiply(15,3)."\n" );
$divide = function($A,$B) use($nix) { return $A/$B; };
print_r( "divide ".$divide(15,3)."\n" );



/**
 * Schreibe eine Funktion, die eine Temeratur in Celsius in eine Temperatur in
 * Fahrenheit umrechnet.
 * 
 * @param {number} celsius 
 * @return {number}
 */
function inFahrenheit ($celsius) {
    $fahrenheit = $celsius*42;
    return $fahrenheit;
}
echo("42°C inFahrenheit ".inFahrenheit(42). " todo:FIXIT\n");
/**
 * Schreibe eine Funktion, die eine Temeratur in Fahrenheit in eine Temperatur
 * in Celsius umrechnet.
 * 
 * @param {number} celsius 
 * @return {number}
 */
function inCelsius ($fahrenheit) {
    return $fahrenheit-33; 
    // ...
}

/**
 * Schreibe eine Funktion, die prüft, ob eine Zahl gerade ist.
 * 
 * @param {int} number
 * @return {boolean}
 */
function isEven($zahl) {
    return $zahl%2;     
 } // TODO

/**
 * Schreibe eine Funktion, die prüft, ob eine Zahl ungerade ist.
 * 
 * @param {int} number
 * @return {boolean}
 */
function isOdd ($zahl) {
    return !($zahl%2);
 } // TODO

// Kontrollfluss

// if

/**
 * Schreibe eine Funkntion, die abhängig von dem als Zahl eingegebenen Monat die
 * passende Jahreszeit zurückgibt. Und zwar
 * 
 * "Frühling" für die Monate März, April, Mai
 * "Sommer" für die Monate Juni, Juli, August
 * "Herbst" für die Monate September, Oktober, November und
 * "Winter" für die Monate Dezember, Januar und Februar.
 *
 * @param {int} monat 
 * @returns {string} Jahreszeit
 */
function jahreszeit ($monat) {

    // ...
}

/**
 * Schreibe eine Funktion, die die Umsatzsteuer anhand des Umsatzes und des
 * Steuerjahres berechnet. Der Steuersatz beträgt 19%. Liegt der Umsatz unter
 * der Freigrenze von 17.500 EUR (für die Steuerjahre 2003-2019) bzw. 22.000 EUR
 * (für die Steuerjahre ab 2020) soll die Kleinunternehmerregelung angewendet
 * und keine Umsatzsteuer berechnet werden. Der Rückgabewert ist dann 0.
 * 
 * @param {number} umsatz 
 * @param {int} steuerjahr 
 * @returns {number}
 */
function umsatzsteuer ($umsatz, $steuerjahr = 2024) {
    
    // ...
}

// switch

/**
 * Schreibe eine Funktion, die den Flächeninhalt verschiedener geometrischer
 * Formen berechnet. Die Funktion soll zwei Argumente erhalten:
 * Den Namen der geometrischen Form (circle, triangle, rectangle), sowie die
 * dafür relevanten Parameter als ein Objekt.
 * Für die Berechnung eines Kreises wird der Radius (radius) benötigt.
 * Für die Berechnung eines Dreieckes sowie eines Rechteckes werden die Länge
 * der Grundseite (base) sowie die Höhe (height) benötigt.
 * 
 * @param {string} shape 
 * @param {object} params 
 * @returns {number}
 */
function area ($shape, $params) {
    
    // ...
}

// loops

/**
 * Schreibe eine Funktion, die alle Karten eines Kartenspiels jeweils mit ihrer
 * Farbe (Clubs, Spades, Hearts, Diamonds) und ihrem Wert (2 - 10, J, K, Q, A)
 * erzeugt.
 * Die Karten werden als Array bestehend aus Farbe und Wert dargestellt und alle
 * Karten in einem Array gesammelt zurückgegeben.
 * 
 * @returns {[[string, string]]}
 */
function deckOfCards () {
    
    // ...
}

/**
 * Schreibe eine Funktion, die die ersten N Antworten für das FizzBuzz-Spiel
 * erzeugt und auf der Konsole ausgibt.
 * 
 * @param {int} n 
 * @see https://de.wikipedia.org/wiki/Fizz_buzz
 */
function fizzbuzz ($n) {
    
    // ...
}

// recursion

/**
 * Schreibe eine rekursive Funktion, die die N-te Fibonacci-Zahl berechnet.
 * 
 * @param {int} n 
 * @returns {int} n-th Fibonacci number
 * @see https://de.wikipedia.org/wiki/Fibonacci-Folge
 */
function fibonacci ($n) {
    
    // ...
}
