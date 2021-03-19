<?php
  
// Inicialización de variables //
    
$eleccion = true;
$opcion = menu();  
vinos($opcion);
  

  // Controla que la opción elegida sea valida //

  do { 
      
      $opcion = menu();

      if ($opcion == 5) {

          $eleccion = false;
    }

      vinos($opcion);
      
} while ($eleccion == true);




/*
 * Guarda los datos de variedad, stock, año de produccion y precio por unidad, según variedad de vino
 * @param array $coleccionV
 * @param int $opcion
*/

function vinos ($opcion) {

$coleccionV = array ();

$coleccionV['Malbec'] = array (
  "variedad" => ["dulce", "semiseco", "seco"],
  "stock" => [13000, 7820, 20410],
  "anioProduccion" => [2015, 2003, 2019],
  "precio" => [2389, 965, 1743],
);

$coleccionV['CabernetSauvignon'] = array (
  "variedad" => ["dulce", "semiseco", "seco"],
  "stock" => [5070, 7841, 3210],
  "anioProduccion" => [2013, 2018, 2000],
  "precio" => [3900, 4101, 1203],

);

$coleccionV['Merlot'] = array (
  "variedad" => ["dulce", "semiseco","seco"],
  "stock" => [51230, 25100, 6541],
  "anioProduccion" => [2010, 2002, 1985],
  "precio" => [899, 1034, 782]

);
    // Inicialización de variables //

    $Malbec = $coleccionV['Malbec'];
    $CabernetS = $coleccionV['CabernetSauvignon'];
    $Merlot = $coleccionV['Merlot'];

    
    // Determina como continuar después de elegir una opción del menu //
    

  if ($opcion == 1) {
      
      // INFORMACIÓN MALBEC //
      
           echo "MALBEC (dulce) \n";          
           echo "Stock: ". $Malbec["stock"][0] . "\n";  
           echo "Año de Producción: " . $Malbec["anioProduccion"][0] . "\n";  
           echo "Precio por Unidad :" . $Malbec["precio"][0] . "\n"; 
           echo "\n";      
      
           echo "MALBEC (semiseco) \n";          
           echo "Stock: ". $Malbec["stock"][1] . "\n";  
           echo "Año de Producción: " . $Malbec["anioProduccion"][1] . "\n";  
           echo "Precio por unidad :" . $Malbec["precio"][1] . "\n"; 
           echo "\n";      

           echo "MALBEC (seco) \n";          
           echo "Stock: ". $Malbec["stock"][2] . "\n";  
           echo "Año de Producción: " . $Malbec["anioProduccion"][2] . "\n";  
           echo "Precio por unidad :" . $Malbec["precio"][2] . "\n"; 
           echo "\n \n";      
      
      // INFORMACIÓN CABERNET SAUVIGNON //
      
           echo "CABERNET SAUVIGNON (dulce) \n";          
           echo "Stock: ". $CabernetS["stock"][0] . "\n";  
           echo "Año de Producción: " . $CabernetS["anioProduccion"][0] . "\n";  
           echo "Precio por unidad :" . $CabernetS["precio"][0] . "\n"; 
           echo "\n";      
      
           echo "CABERNET SAUVIGNON (semiseco) \n";          
           echo "Stock: ". $CabernetS["stock"][1] . "\n";  
           echo "Año de Producción: " . $CabernetS["anioProduccion"][1] . "\n";  
           echo "Precio :" . $CabernetS["precio"][1] . "\n"; 
           echo "\n";

           echo "CABERNET SAUVIGNON (seco) \n";          
           echo "Stock: ". $CabernetS["stock"][2] . "\n";  
           echo "Año de Producción: " .$CabernetS["anioProduccion"][2] . "\n";  
           echo "Precio por unidad :" . $CabernetS["precio"][2] . "\n"; 
           echo "\n \n";
      
      // INFORMACIÓN MERLOT //

           echo "MERLOT (dulce) \n";          
           echo "Stock: ". $Merlot["stock"][0] . "\n";  
           echo "Año de Producción: " . $Merlot["anioProduccion"][0] . "\n";  
           echo "Precio por unidad :" . $Merlot["precio"][0] . "\n"; 
           echo "\n";      
      
           echo "MERLOT (semiseco) \n";          
           echo "Stock: ". $Merlot["stock"][1] . "\n";  
           echo "Año de Producción: " . $Merlot["anioProduccion"][1] . "\n";  
           echo "Precio por unidad :" . $Merlot["precio"][1] . "\n"; 
           echo "\n";      

           echo "MERLOT (seco) \n";          
           echo "Stock: ". $Merlot["stock"][2] . "\n";  
           echo "Año de Producción: " . $Merlot["anioProduccion"][2] . "\n";  
           echo "Precio por unidad :" . $Merlot["precio"][2] . "\n";
           echo "\n \n";      
                  

  } elseif ($opcion == 2) {

         $datosVinos = calculo($coleccionV['Malbec']["stock"], $coleccionV['Malbec']["precio"]);
         echo "\n MALBEC:";
         echo "\n Cantidad de botellas: ", $datosVinos[1];
         echo "\n Precio promedio: ", $datosVinos[0];


} elseif ($opcion == 3) {

         $datosVinos = calculo($coleccionV['CabernetSauvignon']["stock"], $coleccionV['CabernetSauvignon']["precio"]);
         echo "\n CABERNET SAUVIGNON:";      
         echo "\n Cantidad de botellas: ",$datosVinos[1];
         echo "\n Precio promedio: ",$datosVinos[0];


} elseif ($opcion == 4) {

        $datosVinos = calculo($coleccionV['Merlot']["stock"], $coleccionV['Merlot']["precio"]);
        echo "\n MERLOT:";     
        echo "\n Cantidad de botellas: ",$datosVinos[1];
        echo "\n Precio promedio: ",$datosVinos[0];


} elseif ($opcion == 5) {
  
      $eleccion = false;
  
}

}



/*
 * Calcula la cantidad de Botellas y el precio promedio según la variedad de vino
 * @param int $stockV
 * @param int $precioV
 * @return int
*/

function calculo ($stockV, $precioV) {

$datos = [];          // Inicialización array
$cantBotellas = 0;   //valor inicial
$precioUnidad = 0;  // valor inicial

for ($i=0; $i<3; $i++) {

  $cantBotellas = $stockV[$i]+$cantBotellas;
  $precioUnidad = $precioV[$i]+ $precioUnidad;

}

$promedioPrecio = $precioUnidad / $i;

$datos[0] = $promedioPrecio;
$datos[1] = $cantBotellas;

return $datos;

}

/*
 * Muestra y obtiene una opción de menu valida
 * @param int $opcion
 * @return int
*/

function menu () {
  echo "\n";    
  echo "\n ELIJA UNA OPCIÓN: ";
  echo "\n";
  echo "\n ( 1 ) Ver información sobre los vinos";
  echo "\n";
  echo "\n";  
  echo "\n Calcular la cantidad de botellas y el promedio de precio de la misma según variedad: ";
  echo "\n ( 2 ) Malbec";
  echo "\n ( 3 ) Cabernet Sauvignon";
  echo "\n ( 4 ) Merlot"; 
  echo "\n";
  echo "\n";      
  echo "\n ( 5 ) Salir";
  echo "\n";

  $opcion = trim(fgets(STDIN));


  // Controla que la opción elegida sea valida //

  do {

    if ($opcion <1 || $opcion >5) {

      echo "La opción ingresada no es válida. Ingrese nuevamente su elección: ";
      $opcion = trim(fgets(STDIN));
    }

  } while ($opcion <1 || $opcion >5);

      return $opcion;

}


//***** FIN PROGRAMA    *****//

?>