<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
      <input type="number" name="a">
      <input type="number" name="b">
      <input type="number" name="c">
      <button type="submit">Oblicz deltę!</button>
    </form>
    <?php 
     if(
         isset($_POST['a']) 
         && isset($_POST['b']) 
         && isset($_POST['c'])
         && $_POST['a'] != 0
         && $_POST['b'] != 0
         && $_POST['c'] != 0
        ) {
       $a = $_POST['a'];
       $b = $_POST['b'];
       $c = $_POST['c'];
 
       $delta = $b * $b - (4 * $a * $c);
       if ($delta < 0) {
        echo '<h1>Błędne Dane</h1>';
       } else {
         echo $delta;
       }
     } else {
         echo '<h1>Błędne Dane</h1>';
     }
    ?>
</body>
</html>