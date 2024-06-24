<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

function Sumar($num1, $num2) {
    return $num1 + $num2;
}

function Restar($num1, $num2) {
    return $num1 - $num2;
}

function Multiplicar($num1, $num2) {
    return $num1 * $num2;
}

function Dividir($num1, $num2) {
    if ($num2 == 0) {
        return "Error: División por cero";
    }
    return $num1 / $num2;}

        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operacion) {
                case "Sumar":
                    $resultado = Sumar($num1, $num2);
                    break;
                case "Restar":
                    $resultado = Restar($num1, $num2);
                    break;
                case "Multiplicar":
                    $resultado = Multiplicar($num1, $num2);
                    break;
                case "Dividir":
                    $resultado = Dividir($num1, $num2);
                    break;
                default:
                    $resultado = "Operación no válida";
                    break;
            }
            echo "Resultado: " . $resultado;
        } else {
            echo "Error: Por favor, ingrese números válidos.";
        }
    } else {
        echo "Método de solicitud no válido.";
    }

?>