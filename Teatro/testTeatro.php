<?php

include 'teatro.php';

$continuar = true;

/* MENU PRINCIPAL
 * Da a elegir varias a opciones para operar
 * return int
*/

function menu() {
    echo "Elija una opción: \n";
    echo "( 1 ) Cargar información del Teatro \n";
    echo "( 2 ) Ver información actualizada \n";
    echo "( 3 ) Cambiar nombre del teatro \n";
    echo "( 4 ) Cambiar la dirección \n";
    echo "( 5 ) Cambiar funciones \n";
    echo "( 6 ) Salir \n";

    $eleccion = trim(fgets(STDIN));

    /* Comprueba que la elección sea válida */

    do {
        if ($eleccion <1 || $eleccion >7) {
            echo "Inválido. Vuelva a ingresar una opción. \n";
            $eleccion = trim(fgets(STDIN));
        }
    } while ($eleccion <1 || $eleccion >7);
    return $eleccion;
}


do {

    /* Según la opción seleccionada en el Menú Principal procede a operar */

    switch (menu()) {

        case 1: // Cargar información

            echo "Nombre del Teatro: \n";
            $nomTeatro = trim(fgets(STDIN));
            echo "\n";
            echo "Dirección: \n";
            $dir = trim(fgets(STDIN));
            echo "\n";

            for ($i=0; $i < 4; $i++) { 
                echo "Nombre de la función \n";
                $funcionesNuevas [$i]['nombre'] = trim(fgets(STDIN));
                echo "\n";
                
                echo "Precio de la función \n";
                $funcionesNuevas [$i]['precio'] = trim(fgets(STDIN));
                echo "\n";
            }

            $teatro = new Teatro ($nomTeatro, $dir, $funcionesNuevas);
            echo "\n";
            break;

        case 2: // Ver información

            echo $teatro;
            echo "\n";
            break;

        case 3: // Cambiar nombre del Teatro

            echo "Escriba un nuevo nombre: \n";
            $nuevoNombre = trim(fgets(STDIN));
            $teatro->cambiarNombreTeatro($nuevoNombre);
            echo "\n";
            break;
        
        case 4: // Cambiar la dirección

            echo "Escriba una nueva dirección: \n";
            $nuevaDir = trim(fgets(STDIN));
            $teatro->cambiarDireccion($nuevaDir);
            echo "\n";
            break;
        
        case 5: //Cambiar funciones

            $cambio = cambiarfuncion();
            echo "\n";

            /* Según la opción elegida procede a operar */

            /* Cambio del nombre de las funciones */
            if ($cambio == 1) 
            { 

                /* Da elegir una función y según la elección pide los nuevos datos a ingresar */ 

                do {
                    echo $teatro->verNombreFunciones();
                    echo "\n";
                    echo "Elija una función (1-4): \n";
                    $numFuncion = trim(fgets(STDIN));

                        /* Comprueba que la opción seleccionada sea válida */

                        do {
                            if ($numFuncion <1 || $numFuncion >4) {
                            echo "Inválido. Vuelva a ingresar una opción. \n";
                            $numFuncion = trim(fgets(STDIN));
                            }
                    
                        } while ($numFuncion <1 || $numFuncion >4);                        

                    echo "Nuevo nombre de la función: \n";
                    $nuevaFuncion = (trim(fgets(STDIN)));
                    $teatro->cambiarNombreFunciones($numFuncion, $nuevaFuncion);
                    echo "\n";

                    echo "¿Desea cambiar otra función? \n";
                    echo "Si/No \n";
                    $respuesta = strtolower(trim(fgets(STDIN)));

                } while ($respuesta == "si");     

            echo "\n";
            }

            /* Da elegir que precio cambiar y según lo seleccionado pide los nuevos datos a ingresar */

            if ($cambio == 2) {

                do {
                    echo $teatro->verPrecioFunciones();
                    echo "\n";
                    echo "Elija una función (1-4): \n";
                    $numFuncion = trim(fgets(STDIN));

                        /* Comprueba que la opción seleccionada sea válida */

                        do {
                            if ($numFuncion <1 || $numFuncion >4) {
                            echo "Inválido. Vuelva a ingresar una opción. \n";
                            $numFuncion = trim(fgets(STDIN));
                            }
                    
                        } while ($numFuncion <1 || $numFuncion >4);


                    echo "Escriba el nuevo precio: \n";
                    $nuevoPrecio = (trim(fgets(STDIN)));
                    $teatro->cambiarPrecioFunciones($numFuncion, $nuevoPrecio);
                    echo "\n";

                    echo "¿Desea cambiar otro precio? \n";
                    echo "Si/No \n";
                    $resp = strtolower(trim(fgets(STDIN)));

                } while ($resp == "si");                
            
            }

            echo "\n";
            break;
        
        case 6: // Salir

            $continuar=false;
            break;
    }
} while ($continuar);


/* Da a elegir entre modificar el nombre de la función o el precio 
 *  return int
 */

function cambiarFuncion () {
    echo "¿Que desea modificar? \n";
    echo "( 1 ) Nombre de la función \n";
    echo "( 2 ) Precio de la función \n";
    $opcion = trim(fgets(STDIN));

    do {
        if ($opcion <1 || $opcion >2) {
            echo "Inválido. Vuelva a ingresar una opción. \n";
            $opcion = trim(fgets(STDIN));
        }
    } while ($opcion <1 || $opcion >2);
    return $opcion;
}

