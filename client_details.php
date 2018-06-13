<?php
require_once 'connect_file/connect.php';
session_start();



if (!$_GET['id']){
    header('Location: client_space.php');
} else {
    $id = $_GET['id'];


    $req_client = "SELECT 
                    `id_client`, 
                    `firstname`, 
                    `lastname`, 
                    `email`, 
                    `phone`, 
                    `address`, 
                    `age`, 
                    `dateBirth` 
                    FROM 
                    client 
                    WHERE
                    `id_client` = :id";
    
    $sql = $pdo->prepare($req_client);
    $sql->bindValue(':id', $id , PDO::PARAM_STR);
    $sql->execute();
    $clientInfo = $sql->fetch();
    var_dump($clientInfo);
    

}