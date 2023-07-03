<?php
    require_once 'pdo_category.php';
    $data = ['name' => $_POST['name']];
    createNewData($data);
    header("Location: http://localhost/day8/category.php");
?>