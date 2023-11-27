<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

    $cats = allCategories($pdo);
    $title = 'Category list';
    $totalCats = totalCats($pdo);

    ob_start();
    include '../templates/cats.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';

