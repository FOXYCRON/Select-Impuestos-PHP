<html>
  <head>
     <title> Select Ingresos </title>
 </head>
   <body>


       <form method = "post" action = "selectIngresos2.php">

      <h4> <b> Ingrese Nombre: </b>
         <input type="text" name="nom"> </h4>


         <h4> Seleccione en que rango se ubican sus ingresos semanles: </h4>

       <select name = "operacion">
         <option value = "1-1000"> 1-1000 </option>
         <option value = "1001-3000"> 1001-3000 </option>
         <option value = ">3000"> >3000 </option>

      </select>

   <br>
   <br>

      <input type = "submit" name = "operar">
    </form>
   </body>
</html>