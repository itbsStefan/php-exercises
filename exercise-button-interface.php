<?php

interface Button {
    /**
     * return text: string
     */
    function getText(): string;
    /**
     * return color: string in format #XXXXXX
     */
    function getColor(): string;
}


class MartinasButton implements Button{
    private $text;
    private $farbe;

    function __construct($text, $farbe) {
        $this->text = $text;
        $this->farbe = $farbe;
    }
    function getText(): string {
        return $this->text;
    }
    function getColor(): string {
        return $this->farbe;
    } 
}

$martina = new MartinasButton("Hier klicken", "#228B22");

?>