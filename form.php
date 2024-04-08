      
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
      <form action="grundlagen.php" method="get">
        get name? <input name="name" type="text"/> 
        <input type="submit" value="name senden" name="formname"/>
      </form>
