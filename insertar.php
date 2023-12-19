<?php
    include("db.php");

    if(isset($_POST['save_task'])) {
        $nombre = $_POST['nombre'];
        $protagonista = $_POST['protagonista'];
        $genero = $_POST['genero'];
        $publisher = $_POST['publisher'];
        $sinopsis = $_POST['sinopsis'];

        $query = "INSERT INTO pelicula(nombre, protagonista, genero, publisher, sinopsis) VALUES ('$nombre', '$protagonista', '$genero', '$publisher', '$sinopsis')";
        $result =  mysqli_query($mysqli, $query);
        if(!$result){
            die('Query failed');
        }

        $_SESSION['message'] = 'Pelicula guardada exitosamente';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    }

?>