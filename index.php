<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    
    <title>Operaciones</title>
</head>

<body>
<h1><u>APLICACION DE CALCULOS</u></h1>
    <fieldset>
        <legend>Operaciones Matematicas</legend>

        <form action="#" method="POST">
            <label for="num1">Ingrese el primer numero</label><br>
            <input type="number" name="n1"><br>
            <br>
            <label for="operacion">Operacion</label><br>
            <select name="operaciones" id="oper">
              <option value="suma">Sumar</option>
              <option value="resta">resta</option>
              <option value="multiplicacion">multiplicacion</option>
              <option value="division">division</option>






           </select>
            <br>
            <br>


            <label for="num2">Ingrese el segundo numero numero</label><br>
            <input type="number" name="n2"><br>
            
            
            <input type="submit" name="enviar" value="calcular" onclick="alert('calculando operacion');">




        </form>
    </fieldset>
    <?php
include ("estilos.php");

echo "<h1><u>RESULTADO</u> </h1>";

extract($_POST);
$opc=$_POST["operaciones"];

echo "<div class='texto'>";
if(isset($_POST["enviar"])){
  
  switch ($opc) {
    
    
    case 'suma':
     $resultado= $n1 + $n2;
     echo "  La suma de:  ". $n1. "+". $n2 . "=" . $resultado ;
      break;

      case 'resta':
        $resultado= $n1 - $n2;
        echo "La resta de: ". $n1. "-". $n2 . "=" . $resultado;
         break;

         case 'multiplicacion':
          $resultado= $n1 * $n2;
          echo "La multiplicacion de:". $n1. "x". $n2 . "=" . $resultado;
           break;
           
           case 'division':
            $resultado= $n1 / $n2;
            echo "La division de: ". $n1. "/". $n2 . "=" . $resultado;
             break;
    
    
  }


}
echo "</div>";

?>


</body>

</html>