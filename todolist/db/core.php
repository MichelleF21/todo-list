<?php

try{
    
    $conn = new PDO('mysql:host=localhost;dbname=todolist','root','');

}catch(PDOException $e){

    echo "Error de conexión:";
}

if(isset($_POST['id'])){
    
    $id=($_POST['id']);
    $completado=(isset($_POST['completado']))?1:0;

    $sql = "UPDATE tareas SET completado=? WHERE id=?";
    $sentencia= $conn->prepare($sql);
    $sentencia->execute([$completado,$id]);
    
}

if(isset($_POST['agregar_tarea'])){

    $tarea=($_POST['tarea']);
    $sql = 'INSERT INTO tareas (tarea) VALUE(?)'; //inserta lo que el usuario este indicando
    $sentencia= $conn->prepare($sql); //prepara la sentencia
    $sentencia->execute([$tarea]); //ejecuta la sentencia
}

if(isset($_GET['id'])){

    $id=($_GET['id']);
    $sql = "DELETE FROM tareas WHERE id=?";
    $sentencia= $conn->prepare($sql);
    $sentencia->execute([$id]);
}



$sql = "SELECT * FROM tareas";
$resultados=$conn->query($sql);





?>

