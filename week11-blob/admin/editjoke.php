<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try{
    if(isset($_POST['joketext'])){
        updateJoke($pdo, $_POST['jokeid'], $_POST['joketext']);
        header('location: jokes.php');
    }else{
        $joke = getJoke($pdo, $_GET['id']);
        $title = 'Edit joke';

        ob_start();
        include '../templates/editjoke.html.php';
        $output = ob_get_clean();
    }
}catch(PDOException $e){
    $title = 'error has occured';
    $output =  'Error editing joke: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';

