<?php
/*Ejercicio 1
Problema de Ordenar Lista con Bubble Sort:
Escribe un programa que ordene una lista de números de forma descendente
utilizando el algoritmo Bubble Sort. La lista puede contener duplicados
y valores negativos. Asegúrate de manejar estos casos y muestra la lista 
antes y después de aplicar el algoritmo.*/

function ordenarBubble(&$arr) {
    //recorre el array hasta que este ordenado
    for ($i = 0; $i < count($arr) - 1; $i++) {
        //cambia las parejas
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            //si el numero es menor que el isguiente los cambia
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

//Mostramos la lista sin ordenar y la lista despuesd de pasarle la funcion ordenarBubble
$myList = [3, -15, 7, 2, -8, 40, 3, 7, -1, 3, 3];
echo "Lista sin ordenar";
print_r($myList);
ordenarBubble($myList);
echo "Lista ordenada";
print_r($myList);




/*Ejercicio 2
Problema de Ordenar Lista con Merge Sort:
Implementa una función que ordene una lista de palabras alfabéticamente
utilizando el algoritmo Merge Sort. Muestra la lista antes y después de
aplicar el algoritmo.*/


function mergeSort($array) {
    // Si la lista tiene 1 o menos elementos, ya está ordenada
    if (count($array) <= 1) {
        return $array;
    }

    // se divide el array en dos mitades
    $mid = floor(count($array) / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    //  ordenar ambas mitades
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combina ambas mitades ordenadas
    return merge($left, $right);
}

// Función para fusionar los dos arrays ordenados
function merge($left, $right) {
    $result = [];
    $i = 0; 
    $j = 0; 

    // Comparar elementos de ls arrays y añade el más pequeño al resultado
    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) { // para que no distinga entre mayusculas y minusculas
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // añade los elementos restantes de la izquierda
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    // añade los elementos restantes de la derecha (si los hay)
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

//Mostramos la lista sin ordenar y la lista desppues de pasarle la funcion mergeSort
$myNewList = ["Denis", "Ernesto", "Jairo", "Oscar", "David", "Nayib", "Cesar", "Ekko"];
echo "Lista antes del ordenamiento:\n";
print_r($myNewList);
$listaOrdenada = mergeSort($myNewList);
echo "Lista después del ordenamienot (alfabéticamente):\n";
print_r($listaOrdenada);





/*Ejercicio 3
Problema de Ordenar Lista con Insertion Sort:
Crea un script que ordene una lista de nombres en orden alfabético
utilizando el algoritmo Insertion Sort. Muestra la lista antes y 
después de aplicar el algoritmo.*/

function ordenarInsertionSort(&$array) {
   
    for ($i = 1; $i < count($array); $i++) {
        $key = $array[$i]; // elemento actual 
        $j = $i - 1;

        // movemos los elementos mayores que "key" hacia adelante
        while ($j >= 0 && strcasecmp($array[$j], $key) > 0) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key;
    }
}

//Mostramos la lista sin ordenar y la lista despues de pasarle la funcion ordenarInsertionSort
$myLastNameList = ["Guerra", "Arevalo", "Trump", "Rubio", "Milei", "Zamora", "Castro", "Bukele"];
echo "Lista sin ordenar:\n";
print_r($myLastNameList);
ordenarInsertionSort($myLastNameList);
echo "Lista después ordenar(Orden alfabetico):\n";
print_r($myLastNameList);




?>