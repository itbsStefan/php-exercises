<?php

/**
 * Schreibe je eine Funtion add, substract, multiply, divide, die die
 * jeweilige Grundrechenart auf die beiden übergebenen Parameter A und B
 * anwendet. Verwende Arrow-Funktionen.
 */
// ...
// ...
// ...
// ...

/**
 * Schreibe eine Funktion, die eine Temeratur in Celsius in eine Temperatur in
 * Fahrenheit umrechnet.
 * 
 * @param {number} celsius 
 * @return {number}
 */
function inFahrenheit ($celsius) {

    // ...
}

/**
 * Schreibe eine Funktion, die eine Temeratur in Fahrenheit in eine Temperatur
 * in Celsius umrechnet.
 * 
 * @param {number} celsius 
 * @return {number}
 */
function inCelsius ($fahrenheit) {

    // ...
}

/**
 * Schreibe eine Funktion, die prüft, ob eine Zahl gerade ist.
 * 
 * @param {int} number
 * @return {boolean}
 */
function isEven () { } // TODO

/**
 * Schreibe eine Funktion, die prüft, ob eine Zahl ungerade ist.
 * 
 * @param {int} number
 * @return {boolean}
 */
function isOdd () { } // TODO

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