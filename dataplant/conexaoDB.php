<?php
    //endereco
    //nome do DB
    //usuario
    //senha

    $endereco = 'localhost';
    $banco = 'dataplant';
    $usuario = 'postgres';
    $senha = 'toor';


    try{
        //sgbd:host;port;dbname
        //usuario
        //senha
        //errmode
        $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        echo "Conectado no Banco de Dados!!!";
    } catch (PDOException $e) {
        echo "Falha ao conectar ao Banco de Dados. <br/>";
        die($e->getMessage());
    }

?>