<?php
include_once '../modelo/Excel.php';
include_once '../modelo/ExcelBO.php';
include_once '../modelo/ConectaBD.php';

echo "<script>console.log( 'Debug Objects: Doing more stuff!!!' );</script>";
$archivoExcel = new Excel($_POST);
$logicaExcel = new ExcelBO();
$logicaExcel->generarExcel($archivoExcel);
?>