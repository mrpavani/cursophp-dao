<?php
    require_once("config.php");

    //Carrega apens 1 usuario
    //$root = new Usuario();
    //$root->loadById(3);
    //echo $root;

    //Carrega uma lista de usuário
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    // Carrega uma lista de usuário buscando pelo Login
    //$search = Usuario::search("Pe");
    //echo json_encode($search);

    $usuario = new Usuario();
    $usuario->login("eduardo", "1234567");

    echo $usuario

?>