<?php
if ($button >= 0 && $button <=9) {//если нажата цифра, то новое значение дисплея (ноль в начале убирается)
    if ($display == 0) {
        $display = $button;
    } else {
        $display = $display . $button;
    }
    ($operation == '') ? $x = $display: $y = $display;
} elseif ($button == 'dot') {//если нажата точка, то при нуле ничего не происходит, в противном случае точка добавляется
    if ($display == 0) {
        $display = 0;
    } elseif (!str_contains($display, '.')){//проверка на наличие ранее введенного разделителя (точки) - вторую точку поставить нельзя
        $display = $display . ".";
    }
    ($operation == '') ? $x = $display: $y = $display;
}
if ($button == 'clean') {
    $display = 0;
    $x = '';
    $y = '';
    $operation = '';
}
if (($button == 'plus' || $button == 'minus' || $button == 'divide' || $button == 'multiply') && $operation == '' && $y == '') {
        $operation = $button;
        $display = 0;
        $y = 0;
}
elseif ($button == 'result' && $operation <>'' && $y <> '') {
        //$y = $display;    
        switch ($operation) {
            case 'plus':
            $display = $x + $y;
            break;
            case 'minus':
            $display = $x - $y;
            break;
            case 'multiply':
            $display = $x * $y;
            break;
            case 'divide':
            ($y == 0) ? $display = 'infinity': $display = $x / $y;
            break;
        }
}
switch ($operation) {
    case 'plus':
        $operation_symbol = '+';
        break;
    case 'minus':
        $operation_symbol = '-';
        break;
    case 'multiply':
        $operation_symbol = '*';
        break;
    case 'divide':
        $operation_symbol = '/';
        break;
    default:
        $operation_symbol = '';
    }
require "../core/view.php";