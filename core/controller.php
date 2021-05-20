<?php
(isset($_GET['x'])) ? $x = htmlspecialchars($_GET['x']) : $x = '';
(isset($_GET['y'])) ? $y = htmlspecialchars($_GET['y']) : $y = '';
if (isset($_GET['operation'])) {
    $operation = htmlspecialchars($_GET['operation']);
} else {
    $operation = '';
    $operation_symbol = '';
}
(isset($_GET['figure'])) ? $button = htmlspecialchars($_GET['figure']) : $button ='что-то не так';//метка нажатой кнопки
(isset($_GET['display'])) ? $display = htmlspecialchars($_GET['display']): $display = 0;//содержимое дисплея до нажатия на кнопку калькулятора    
require "../core/model.php";