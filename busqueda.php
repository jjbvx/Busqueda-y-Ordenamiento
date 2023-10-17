<?php
// Función para realizar una búsqueda en un array
function buscarElemento($array, $elemento) {
    $encontrado = array_search($elemento, $array);
    if ($encontrado !== false) {
        echo "Elemento $elemento encontrado en la posición $encontrado.<br>";
    } else {
        echo "Elemento $elemento no encontrado en el array.<br>";
    }
}

// Función para ordenar el array utilizando el método de selección
function seleccionSort($array) {
    $n = count($array);

    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;

        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }

        if ($minIndex != $i) {
            $temp = $array[$i];
            $array[$i] = $array[$minIndex];
            $array[$minIndex] = $temp;
        }
    }

    return $array;
}

// Función para ordenar el array utilizando el método de burbuja
function burbujaSort($array) {
    $n = count($array);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}

// Función para ordenar el array utilizando el método de inserción
function insercionSort($array) {
    $n = count($array);

    for ($i = 1; $i < $n; $i++) {
        $clave = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && $array[$j] > $clave) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }

        $array[$j + 1] = $clave;
    }

    return $array;
}

// Ejemplo de uso
$numeros = [5, -3, 9, -1, 7, -2, 0, 4];
$elementoBuscado = 7;

// Realizar la búsqueda
buscarElemento($numeros, $elementoBuscado);

// Ordenar el array de tres maneras diferentes
echo "Array ordenado por Selección: " . implode(", ", seleccionSort($numeros)) . "<br>";
echo "Array ordenado por Burbuja: " . implode(", ", burbujaSort($numeros)) . "<br>";
echo "Array ordenado por Inserción: " . implode(", ", insercionSort($numeros)) . "<br>";
?>
