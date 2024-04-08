<?php
$sessionarray = print_r($_SESSION,true);
echo("<br>sessionarray".$sessionarray."<br>");

session_start();

$sessionarray = print_r($_SESSION,true);
echo("<br>sessionarray start".$sessionarray."<br>");


echo("<br>Login Daten POST: ".$_POST["email"]." ".$_POST["passwort"]);

echo("<br>Login Daten GET: ".$_GET["email"]." pw ist ".$_GET["pw"]." form=".$_GET["form"]);

echo("<br>".$sessionarray."<br>Login Daten SESSION: ".$_SESSION["email"]." ".$_POST["passwort"]." a=".$_GET["a"]);
