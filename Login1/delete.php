<?php
$db_File_Path = __DIR__ . '/database.php';
require __DIR__ .'/table.php';
include $db_File_Path;

if(isset($_GET["id"])){
    $id = $_GET["id"];
    // $delete = mysqli_query($connection, "DELETE FROM attendance WHERE id = '$id
    // '");
    $sql = "DELETE FROM attendance WHERE  id = $id";
    $stmt = $pdo -> prepare($query);
    $stmt = bindParam("id", $id);
    $stmt -> execute();
    $pdo = null;
    $stmt = null;
    // $connection -> query($sql);
    header("Location : table.php");
}
// header("Location :  form.php");
exit;

