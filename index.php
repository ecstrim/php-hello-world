<?php 

$name = isset($_GET['name']) ? $_GET['name'] : 'Straniero';

?>
<html>
  <head>
    <title>PHP Demo 1</title>
  </head>
  <body>
    <h2>Ciao, <?php echo $name; ?></h2>
  </body>
</html>
