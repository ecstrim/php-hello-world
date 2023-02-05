<?php

$name = isset($_GET['name']) ? $_GET['name'] : 'Anonymous';


?>

<html>
  <head>
    <title>Hello World v1</title>
  </head>
  <body>
    <h1>Hello, <?php echo $name; ?></h1>
  </body>
</html>
