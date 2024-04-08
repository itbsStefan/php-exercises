      
      <hr/>
      <form action="grundlagen.php" method="post">
        <label for="txtid">$_POST[] Eingabe:</label>
        <input id="txtid" name="txtid" type="text"/> 
        Alter:
        <input name="alterid" type="number"/> 
        <br/>
        <input type="submit" value="abschicken" name="formname"/>
        <button type="submit" name="formname">abschicken</button>
      </form>
      <br>
      <form action="form.php" method="get">
        get name? <input name="name" type="text"/> 
        <input type="submit" value="name senden" name="formname"/>
      </form>

<hr>
      <form action="form.php" method="get"> <!-- get oder post -->
      email? <input name="email" type="text"/> 
      passwort? <input name="passwort" type="text"/> 
        <input type="submit" value="Login Versuch" name="login"/>
      </form>
<?php
session_start();
$getarray = print_r($_GET,true);
$postarray = print_r($_POST,true);
//$sessionarray = print_r($_SESSION,true);
echo("<br>Login Formular Daten(POST): ".$postarray."<br>\n".$getarray);
if( $_POST["login"] === "Login Versuch" ||  $_GET["login"] === "Login Versuch"){
    echo $_POST["email"]." echo Login Versuch ".$getarray;
    echo "<br>Benutze zu erfolgreichen Login <b>ibex</b> zwei mal! <br>\n";
    if( $_POST["email"] === "ibex" && $_POST["passwort"] === "ibex" 
        || $_GET["email"] === "ibex" && $_GET["passwort"] === "ibex" ){
        echo "Login erfolgt";
        if(empty($_POST)){
            echo " post ist leer";
        }else{
            session_start();
            //session_start($_POST);
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["pw"] = "POST ".date("Y-m-d H:i:s");
            header("Location: loginbereich.php?email=".$_POST["email"]."&pw=richtig");
        }
        if(empty($_GET)){
            echo " get ist leer";
        }else{
            session_start();
            $_SESSION["email"] = $_GET["email"];
            $_SESSION["pw"] = "GET ".date("Y-m-d H:i:s");
            header("Location: loginbereich.php?". $_SERVER['QUERY_STRING']);
        }
    }else{
        echo "email oder Passwort falsch! ".$_POST["email"]." ".$_POST["passwort"];
    }     
}
$sessionarray = print_r($_SESSION,true);
echo("<br>sessionarray".$sessionarray."<br>");
