<?php
include("db.php");

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    echo $title;
    echo $description;
    //Colocar valores con comillas simples
    $querySave = "INSERT INTO tasks(titulo, descripcion) VALUES ('$title', '$description')";
    $result = mysqli_query($conexion,$querySave);

    if (!$result) {
        die("Quey Fail");
    }

    $_SESSION['message'] = "Task saved successfully";
    $_SESSION['message_type'] = "success";

    header("location: index.php");
}

?>