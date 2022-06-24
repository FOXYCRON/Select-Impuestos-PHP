<html>
  <head>
    <title> select Ingresos </title>
  </head>

  <body>


    <?php


      if($_REQUEST['operacion'] == "1-1000") {
          echo $nom . " debe pagar impuestos.";
     } else {

      if($_REQUEST['operacion'] == "1001-3000") {
          echo $nom . " debe pagar impuestos.";
}
}
      if($_REQUEST['operacion'] == ">3000") {
          echo $nom . " no debe pagar impuestos a las ganancias.";
}
?>

  </body>
</html>