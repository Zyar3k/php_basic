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
  <h1>Hi php</h1>

  <?php
    // if(isset($_GET['name'])){
    //   $name = $_GET['name'];
    // } else {
    //   $name = 'unknown';
    // }
    // echo '<h2>hello, my name is ' . $name . '</h2>';

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

    // echo $text;
    $a = 'text';

    echo '<br><br>' . $a;
    echo '<br><br>' . $$a;
    


  ?> 
  <!-- <form action="index.php" method="get">
    <input type="text" name="name" id="">
    <input type="submit" value="Send">
  </form> -->


</body>
</html>