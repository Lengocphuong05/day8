<?php
    require_once 'pdo_category.php';
    $id = ['id' => $_POST['id']];
    deleteData($id);
    header("Location: http://localhost/day8/category.php");
?>
?>