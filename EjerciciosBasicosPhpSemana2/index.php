<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Practicos</title>
</head>
<body>
<?php
        //*===========================================
        //codigo u20201206
        // $n1 = 0;
        // $n2 = 6;
        // echo "Variables a utilizar ".$n1." y ".$n2."<br>";

        // $suma = $n1 + $n2;
        // echo "El resultado de su suma es: ".$suma."<br>"; 
        
        // $resta = $n1 - $n2;
        // echo "El resultado de su resta es: ".$resta."<br>"; 
        
        // $multi = $n1 + $n2;
        // echo "El resultado de su multiplicacion es: ".$multi."<br>";

        // if($n2 != 0){
        //     $divi = $n1 + $n2;
        // echo "El resultado de su division es: ".$divi;
        // }else{
        //     echo "La division entre 0 no se puede efectuar";
        // }
        //*===========================================
        $opc_global = 5;
        switch($opc_global){
            case 1:
                /*Desarrolle un ejercicio que le permita a un usuario según el salario que devenga mensualmente calcularle la cantidad que se le puede descontar de manera mensual si solicita un crédito bancario. Las condiciones son las siguientes:
                    • Hasta $450.00 descontar 8%.
                    • Hasta $600.00 descontar 15%.
                    • Hasta $800.00 descontar 18%
                    • Mas $1000.00 descontar 20%.
*/
$salario = 1;
$nuevoSalario = 0;

if($salario >0 && $salario<=450)
{
$totalDescuento = ($salario*0.08);
$nuevoSalario = $salario-$totalDescuento;
    echo "Su salario es de: ".$salario." descuento del 8%. Salario nuevo = $".$nuevoSalario." total descontado =$".$totalDescuento;
}
else if($salario>=451 && $salario<=600)
{
    $totalDescuento = ($salario*0.15);
    $nuevoSalario = $salario-$totalDescuento;
        echo "Su salario es de: ".$salario." descuento del 15%. Salario nuevo = $".$nuevoSalario." total descontado =$".$totalDescuento;;
}
else if($salario>=601 && $salario<=800)
{
    $totalDescuento = ($salario*0.18);
    $nuevoSalario = $salario-$totalDescuento;
        echo "Su salario es de: ".$salario." descuento del 18%. Salario nuevo = $".$nuevoSalario." total descontado =$".$totalDescuento;;
}
else if($salario>800)
{
    $totalDescuento = ($salario*0.20);
    $nuevoSalario = $salario-$totalDescuento;
        echo "Su salario es de: ".$salario." descuento del 20%. Salario nuevo = $".$nuevoSalario." total descontado =$".$totalDescuento;;
}
else
{
    echo "Valor no aceptado";
}
                break;
                case 2:
                    /*
                    Desarrolle un ejercicio que le permita Mostrar en una pantalla el cambien en efectivo que le corresponde a un cliente al realizar una compra en una maquina dispensadora. Ejemplo si se compra una soda en lata y cuesta $0.75 y si el usuario deposito un billete de $5 se le debe de devolver $4.75
                    */
                    $dinero = 0.75;
                    $opc_producto = 1;

                    echo "Productos disponibles: <br>
                    1.Soda en lata $0.75 <br>
                    2.Botella de Agua $1.00 <br>
                    3.Energizante $1.50 <br>
                    4.Zimba $1.25 <br>";

                    if($dinero > 0 && $dinero <=20){
                        if($opc_producto == 1 && $dinero>=0.75)
                        {
                            echo "Usted eligio Soda en lata su vuelto es de $".($dinero-0.75);
                        }
                        else if($opc_producto == 2 && $dinero>=1)
                        {
                            echo "Usted eligio Botella de Agua su vuelto es de $".($dinero-1);
                        }
                        else if($opc_producto == 3 && $dinero>=1.50)
                        {
                            echo "Usted eligio Energizante su vuelto es de $".($dinero-1.50);
                        }
                        else if($opc_producto == 4 && $dinero>=1.25)
                        {
                            echo "Usted eligio Zimba su vuelto es de $".($dinero-1.25);
                        }else{
                            echo "Dinero insuficiente";
                        }
                    }else{
                        echo "<font color='red'>Dinero no aceptado!</font>";
                    }
                    break;
                    case 3:
                        /*En este ejercicio debe pensar en la lógica sobre lo que se pide, Los usuarios que usan esta pagina les gustan las imágenes de Pokémon en formato gif. Se solicita desarrollar en el ejercicio con un bucle la forma de como colocar la cantidad de imágenes gif de un mismo Pokémon solicitado por un usuario
                        */
                        $cantidad_img = 4;
                        while($cantidad_img != 0){
                            echo "<img src='/img/pikachu.png' alt='pikachu'>";
                            $cantidad_img --;
                        }
                        break;
                        case 4:
                            /*
                            Desarrollar un ejercicio que permita llevar la cuenta del crédito que un usuario obtiene en un juego. Ejemplo si el usuario agarra una máquina de Street Fighter que el juego cuesta $1 hasta que pierda y deposita directamente $5 mostrar el mensaje “sigue jugando…” hasta que se le acaben los $5.
                            */
                            
                            echo "Desea Jugar? <br> 1.Inserte $1<br>";
                            $coins = 1;
                            $band = true;
                            while($band == true){
                                for ($i=$coins; $i > 0; $i--) { 
                                    echo "Partida #".$i."<br>";
                                    $coins--;
                                }
                                echo "Desea seguir jugando? <br> 1.Inserte $5<br> 2.Terminar Partida<br>";
                                $opc_partida = 2;
                                if($opc_partida == 1){
                                    $coins = 5;
                                    $vidas_max--;
                                }else{
                                    echo "Fin partida";
                                    $band = false;
                                }
                            }
                            break;
                            case 5:
                                /*
                                Desarrolle un ejercicio que permita mostrar los premios que un usuario se puede ganar según la cantidad de puntos que acumule en un juego de competencias.
                                    100pts gana $40.00
                                    200pts gana $60.00
                                    400pts gana $80.00
                                    500pts gana $100.00
                                Los puntos a ganar deben de ser exactos si no lo es asi el usuario lastimosamente pierde y los puntos no pasan de 500.
                                */
                                $pts = 100;
                                if($pts == 100)
                                {
                                    echo "<font color='Green'><b>Usted gano $40.00</b></font>";
                                }
                                else if($pts == 200)
                                {
                                    echo "<font color='Green'><b>Usted gano $60.00</b></font>";
                                }
                                else if($pts == 400)
                                {
                                    echo "<font color='Green'><b>Usted gano $80.00</b></font>";
                                }
                                else if($pts == 500)
                                {
                                    echo "<font color='Green'><b>Usted gano $100.00</b></font>";
                                }
                                else
                                {
                                    echo "<font color='red'><b>Puntos insuficientes!!</b></font>";
                                }
                                break;
                                default:
                                echo "Caso default";
                                break;
        }
    ?>
</body>
</html>