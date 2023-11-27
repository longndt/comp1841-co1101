<?php
if(isset($_POST['cattext'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertCat($pdo, $_POST['cattext']);
        header('location: cats.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new category';
    ob_start();
    include '../templates/addcat.html.php';
    $output = ob_get_clean();
}
include '../templates/admin_layout.html.php';

