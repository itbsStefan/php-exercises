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



 class InesButton implements Button{
   public $text = "";
   public $color = "";
    function __construct($text, $color) {
        $this->name = $text;
        $this->name = $color;
      }
    function getText() : string{
        return $this-> text = $text;
    }
       
    function getColor() : string{
        return $this-> color = $color;
    }
}

$inesButton = new InesButton("Hallö", "#ff00ff");