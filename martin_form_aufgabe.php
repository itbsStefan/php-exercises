Schreiben Sie eine kleine Webanwendung.  

Der User soll über ein Formular folgende Informationen eingeben können: 

Vorname 

Nachname 

Alter 

Diese Daten sollen an den Server gesendet werden. Hier wird geprüft, ob der User volljährig ist (18 und älter). 

Ist der User volljährig, dann wird er auf eine Willkommens-Seite geleitet und mit folgendem Satz begrüßt: 

Hallo vorname nachname, viel Spaß auf unserer Seite. 

Ist der User nicht noch nicht volljährig wird er zurück zur Eingabeseite geleitet. 

Zusatz (optional): Beim Rückleiten auf die Eingabeseite soll folgende Message ausgegeben werden: Sorry, dafür bist du leider noch zu jung. In x Jahren bist du herzlich willkommen. 

<br>-----------------------------------------------<br>
<br>
Schreiben Sie eine kleine Webanwendung.  

Der User soll über ein Formular folgende Informationen eingeben können: 

Vorname 

Nachname 

Alter 

Diese Daten sollen an den Server gesendet werden. Hier wird geprüft, ob der User volljährig ist (18 und älter). 

Ist der User volljährig, dann wird er auf eine Willkommens-Seite geleitet und mit folgendem Satz begrüßt: 

Hallo vorname nachname, viel Spaß auf unserer Seite. 

Ist der User noch nicht volljährig wird er zurück zur Eingabeseite geleitet. 

Zusatz (optional): Beim Rückleiten auf die Eingabeseite soll folgende Message ausgegeben werden: Sorry, dafür bist du leider noch zu jung. In x Jahren bist du herzlich willkommen. 
<br>==============================<br>
<br>
<?php
echo "Hallo vorname nachname, viel Spaß auf unserer Seite.";


session_start();

$sessionarray = print_r($_SESSION,true);
echo("<hr>sessionarray start <br>");


echo("<br>Login Daten POST: ".$_POST["email"]." ".$_POST["passwort"]);

echo("<br>Login Daten GET: ".$_GET["email"]." pw ist ".$_GET["pw"]." form=".$_GET["form"]);

echo("<br>".$sessionarray."<br>Login Daten SESSION: ".$_SESSION["email"]." postemail".$_POST["email"]." getemail=".$_GET["email"]);
