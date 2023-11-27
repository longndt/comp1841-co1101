<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try{
    if(isset($_POST['cattext'])){
        updateCat($pdo, $_POST['catid'], $_POST['cattext']);
        header('location: cats.php');
    }else{
        $cat = getCats($pdo, $_GET['id']);
        $title = 'Edit category';

        ob_start();
        include '../templates/editcat.html.php';
        $output = ob_get_clean();
    }
}catch(PDOException $e){
    $title = 'error has occured';
    $output =  'Error editing category: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';

