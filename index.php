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

<form action="index.php" method="get">
    <input type="number" name="num" id="">
    <input type="submit" value="OK">
  </form>
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
    /*
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
    */
    /*
    echo '<h4>Operatory porównania</h4>';
    // $a = 5;
    $a = 'Z';
    // $b = 10;
    $b = 'A';
    echo "a = $a, b= $b<br><br>";
    echo "<br>$a == $b : ";
    var_dump($a == $b);
    echo "<br>$a != <> $b : ";
    var_dump($a <> $b);
    echo "<br>$a < $b : ";
    var_dump($a < $b);
    echo "<br>$a <= $b : ";
    var_dump($a <= $b);
    echo "<br>$a > $b : ";
    var_dump($a > $b);
    echo "<br>$a >= $b : ";
    var_dump($a >= $b);
    echo "<br><br><br>$a === $b : ";
    var_dump($a === $b);
    echo "<br><br><br>$a !== $b : ";
    var_dump($a !== $b);
    */
    /*
    echo '<h4>Operatory logiczne</h4>';
    $a = false;
    $b = true;
    echo "a = ";
    var_dump($a);
    echo "b = ";
    var_dump($b);
    echo "<br><br>OR : ";
    var_dump($a or $b);
    echo "<br><br>AND : ";
    var_dump($a and $b);
    echo "<br><br>OR || : ";
    var_dump($a || $b);
    echo "<br><br>AND && : ";
    var_dump($a && $b);
    echo "<br><br>XOR : ";
    var_dump($a xor $b);
    echo "<br><br>NOT : ";
    var_dump(!$a);
    echo '<br><br> Wynik = ';
    var_dump((true || false) && !false);
    */
    echo '<h4>instrukcje warunkowe</h4>';
    if (isset($_GET['num']) and is_numeric($_GET['num'])) {
      $a = $_GET['num'];
      echo "<br>Liczba = $a";
      if ($a % 2 == 0) {
        echo "<br><br>Liczba jest parzysta";
      } else {
        echo "<br><br>Liczba jest nieparzysta";
      }
      
      if ($a > 0) {
        echo "<br><br>Liczba jest większa od zera";
      } elseif ($a == 0) {
        echo "<br><br>Liczba jest zerem";
      } else {
        echo "<br><br>Liczba jest mniejsza od zera";
      }

      echo $a % 3 == 0 ? '<br>Liczba jest podzielna przez 3.' : '<br>Liczba jest niepodzielna przez 3.';

    } else {
      echo '<br> Nie podano liczby';
    }

  ?> 
  


</body>
</html>