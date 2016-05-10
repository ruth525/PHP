<!DOCTYPE html>
<html>
<head>
	<title>constantes</title>
</head>
<body>
<pre>
<?php
//una constate  puede definer de dos formas 
// usando la función define() 
define("C", "345");
echo C;?> <br>
$array=array("1","2","3");
<?php 
//usando palabra resevada  const 
const k122 = 23;
echo k122;
$array=array("1","2","3");
var_dump($array)
//const 122 = 23;//no se puede definir una constante con numeros
//echo 122;
?>
</pre>

</body>
</html>
 <?php
        class Persona {
          public $nombre = "";
          
          function __construct($nombre) {
              $this->nombre = $nombre;
          }
          
          public function bailar() {
            return "Estoy bailando";
          }
        }
        
        $yo = new Persona("Sabrina");
        if (is_a($yo, "Persona")) {
          echo "Soy una persona, ";
        }
        if (property_exists($yo, "nombre")) {
          echo "Tengo un nombre, ";
        }
        if (method_exists($yo, "bailar")) {
          echo "y se bailar.";
        }
      ?>