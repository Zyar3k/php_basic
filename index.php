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

  table {
    display: inline-block;
    border: 1px solid #999;
    border-collapse: collapse;
    margin: 0 auto;
    text-align: center;
  }
  th {
    width: 100px;
  }

  th, td {
    border: 1px solid grey;
    padding: 5px;

  }
</style>
<h4>Średnia ocen</h4>
  <form action="index.php" method="get">
    <input type="text" name="num" id="">
    <input type="submit" value="Check">
  </form>
  <?php

  if (isset($_GET['num']) and !empty($_GET['num'])) {
    $a = $_GET['num'];
    // echo "<br> Dzień = $a, <br><br>";
    $tab = explode(",", $a);
    // var_dump($tab);
    $sum = 0;
    $i = 0;

    if (is_array($tab)) {
      # code...
      foreach ($tab as $key => $item) {
        if (is_numeric($item) and $item >= 1 and $item <= 6) {
          $sum += $item;
          $i++;
        }
      }
    }

    if ($i > 0) {
      echo "<br>Średnia ocen wynosi: " . round($sum / $i, 2);
    } else {
      echo "<br>Nie podano żdnej oceny";
    }
    


  } else {
    echo '<br> Nie podano ocen!';
  }

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
    /*
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
    */

    // echo '<h4>Instrukcje wyboru</h4>';
    /*
    if (isset($_GET['num']) and is_numeric($_GET['num'])) {
      $day = $_GET['num'];
      echo "<br> Dzień = $day, ";

      switch ($day) {
        case 1:
          echo 'poniedzialek';
          break;
        case 2:
          echo 'wtorek';
          break;
        case 3:
          echo 'środa';
          break;
        case 4:
          echo 'czwartek';
          break;
        case 5:
          echo 'piątek';
          break;
        case 5: case 6:
          echo 'weekend';
          break;
        
        default:
        # code...
        echo 'nie ma takiego dnia';
          break;
      }
    } else {
      echo '<br> Nie podano dnia';
    }
    */
    /*
    if (isset($_GET['num']) and is_numeric($_GET['num'])) {
      $a = $_GET['num'];
      echo "<br> Dzień = $a, <br><br>";

      echo '<table><tr><th>while</th><th>do while</th><th>for</th></tr>';
      echo '<tr>';
      echo '<td>';      
      //while
      $i = $a;
      while ($i > 0) {
        echo "$i<br>";
        if ($i == 5) {
          break;
        }
        $i--;
      }

      echo '</td>';
      echo '<td>';

      // do while
      $i = $a;
      do {
        if ($i % 2 == 1) {
          goto lab1;
        }
        echo "$i - parzysta <br>";
        $i--;
        continue;
        lab1:
        echo "$i - nieparzysta <br>";
        $i--;
      } while ($i > 0);
      
      echo '</td>';
      echo '<td>';
      
      // for
      for (; $a > 0; $a--) { 
        if ($a % 2 == 1) {
          continue;
        }
        echo "$a<br>";
      }
      echo '</td>';
      echo '</tr>';
      echo '</table>';
    } else {
      echo '<br> Nie podano liczby';
    }
    */
    /*
    $tab = array('Arek', 'Kasia', 'Ania');

    echo $tab[0];
    echo '<br>';
    echo $tab[1];
    echo '<br>';
    $tab[2] = 'Karolina';
    echo $tab[2];
    echo '<br>';
    echo '<br>';

    $tab2[0] = 5;
    $tab2[1] = 10;
    $tab2[2] = 15;

    echo $tab2[0];
    echo '<br>';
    echo $tab2[1];
    echo '<br>';
    $tab2[2] = 'Karolina';
    echo $tab2[2];
    echo '<br>';
    echo '<br>';

    $tab3 = array('red'=> 'czerwpny', 'green'=>'zielony', 'blue'=> 'niebieski');
    echo $tab3['red'];
    echo '<br>';
    echo $tab3['green'];
    echo '<br>';
    $tab3['blue'] = 'blue';
    echo $tab3['blue'];
    echo '<br>';
    echo '<br>';
    
    $tab4['language']['programing'] = 'php';
    echo $tab4['language']['programing'];
    echo '<br>';
    echo '<br>';
    
    var_dump($tab);
    echo '<br>';
    echo '<br>';
    print_r($tab);
    */
    /*
    $tab = array('Arek', 'Kasia', 'Karolina', 'Adam', 'Maciek');

    echo 'for:<br><br>';
    // echo count($tab);
    for ($i=0; $i < count($tab); $i++) { 
      echo $tab[$i];
      echo '<br>';
    } 

    echo '<br><br>foreach:<br><br>';

    foreach ($tab as $key => $item) {
      # code...
      echo "$key - $item";
      echo '<br>';
    }
    */
  ?> 
  
  <!-- <form action="index.php" method="get">
    <input type="number" name="num" id="">
    <input type="submit" value="OK">
  </form> -->

</body>
</html>