<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bài 3</title>
</head>
<body>
<h1>Two-Dimensional Associative Arrays</h1>
  <table border = 1>
    <tr>
      <td>Rock Band</td>
      <td>Song 1</td>
      <td>Song 2</td>
      <td>Song 3</td>
    </tr>
    <?php
  echo 'Bài 3 <br>';
  
  $rockBands = [
    'Beatles'=> ['Love Me Do','Hey Jude','Helter Skelter'],
    'Rolling Stones' => ['Waiting on a Friend','Angie','Yesterday\'s Papers'],
    'Eagles' => ['Life in the Fast Lane', 'Hotel California','Best of My Love']
  ];
  foreach ($rockBands as $key => $nhac){
      echo "<tr>";
      echo "<td>$key</td>";
      foreach ($nhac as $key => $nhac){
        echo "<td>$nhac</td>";
      }
      echo"</tr>";
      }
  ?>
</body>
</html>