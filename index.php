<?php
function mathinstring($ma){
    $p = null;
    if(preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $ma, $matches) !== FALSE){
        if(sizeof($matches) < 2)
            return '';
        $operator = $matches[2];
        switch($operator){
            case '+':
                $p = $matches[1] + $matches[3];
                break;
            case '-':
                $p = $matches[1] - $matches[3];
                break;
            case '*':
                $p = $matches[1] * $matches[3];
                break;
            case '/':
                $p = $matches[1] / $matches[3];
                break;
        }
    }
    return $p;
}
?>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            function addPainel(a){document.getElementById("result").setAttribute('value',document.getElementById("result").getAttribute("value")+a);}
            function clearPainel(){document.getElementById("result").setAttribute('value'," ");}
        </script>
    <h1>Calc in PHP, JS, CSS & HTML5</h1>
    <form action="" class="container">
      <input type="text" value="<?php if(isset($_GET['calc'])){echo mathinstring($_GET['calc']);}?>" name="calc" id="result" class="result">
      <div class="second-row">
        <input type="button" onclick="addPainel(7)" value="7" class="global">
        <input type="button" onclick="addPainel(8)" value="8" class="global">
        <input type="button" onclick="addPainel(9)" value="9" class="global">
        <input type="button" onclick="addPainel('/')" name="mode" value="/" class="global">
      </div>
      <div class="third-row">
        <input type="button" onclick="addPainel(4)" value="4" class="global">
        <input type="button" onclick="addPainel(5)" value="5" class="global">
        <input type="button" onclick="addPainel(6)" value="6" class="global">
        <input type="button" onclick="addPainel('*')" name="mode" value="X" class="global">
      </div>
      <div class="fourth-row">
        <input type="button" onclick="addPainel(1)" value="1" class="global">
        <input type="button" onclick="addPainel(2)" value="2" class="global">
        <input type="button" onclick="addPainel(3)" value="3" class="global">
        <input type="button" onclick="addPainel('-')" value="-" class="global">
      </div>
      <div class="conflict">
        <div class="left">
          <input type="button" onclick="addPainel(0)" value="0" class=" big">
          <input type="button" value="NaN" class="small">
          <input type="button" onclick="clearPainel()" value="Del" class="red small white-text top-margin">
          <input type="submit" value="=" class="green white-text big top-margin">
        </div>
        <div class="right">
          <input type="button" onclick="addPainel('+')" value="+" class="global grey plus">
        </div>
      </div>
    </form>
      <footer>
        <div class="footer">
          <br>
        <p>Template: <a href="https://codepen.io/shafikshaon/pen/MvVdBy">Codepen.io</a></p>
        <p>Source: <a href="https://github.com/Nonopichy/calc">Github</a></p>
        <p>Created by Nonopichy</p><br>
        </div>
      </footer>
    </body>
</html>