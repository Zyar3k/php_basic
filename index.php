<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<style>
  *{ 
    font-family: sans-serif;
    text-align: center;
  }
</style>
  <?php
    /*
    <h4>intro</h4>
    if(isset($_GET['name'])){
      $name = $_GET['name'];
    } else {
      $name = 'unknown';
    }
    echo '<h2>hello, my name is ' . $name . '</h2>';
    */
    /*
    <h4>zmienne, typy danych</h4>
    $var = 'Hello';
    $var = 'Hi';
    define('CONSTANT', 'World');
    echo "$var " . CONSTANT;
    echo '<br><br><br>';
    $text = 'ABCD';
    $num = 126;
    $float = 13.31;
    $bool = false;
    echo "$text, $num, $float, ";
    echo '<br>';
    var_dump($bool);
    echo '<br>';
    $textNum = "30";
    echo $textNum + $num;
    echo '<br>';
    var_dump(is_numeric($textNum));
    $a = 'text';
    echo '<br><br>' . $a;
    echo '<br><br>' . $$a;
    */
    echo '<h4>Operatory arytmetyczne</h4>';

    $a = 10;
    $b = 7;
    echo "a = $a, b= $b";
    echo "<br>Dodawanie = " . ($a + $b);
    echo "<br>Odejmowanie = " . ($a - $b);
    echo "<br>Mnożenie = " . ($a * $b);
    echo "<br>Dzielenie = " . round($a / $b, 2);
    echo "<br>Modulo = " . ($a % $b);
    echo "<br>Potęgowanie = " . pow(2 , 3);
    echo "<br>Pierwiastek = " . sqrt(9);

    echo "<br><br>Kolejność = " . ((2 + 2) * 2);

    // $a = $a +10;
    $a += 10;
    echo "<br><br>new a = $a";
    $a++;
    echo "<br><br>newer a = $a";


  ?> 
  <!-- <form action="index.php" method="get">
    <input type="text" name="name" id="">
    <input type="submit" value="Send">
  </form> -->


</body>
</html>