<?php

    session_start();

    $nomeSistema = "Cursos do Alex";
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : ""; //["nome"=>"Alex Watanabe"];

    // $produtos = [
    //     ["nome"=>"Curso Front-End", "preco"=>1200.00, "curacao"=>"5 meses", "img"=>"img/fe.png"],
    //     ["nome"=>"Curso PHP", "preco"=>1000.00, "duracao"=>"3 meses", "img"=>"img/php.png"],
    //     ["nome"=>"Curso Python", "preco"=>3000.00, "duracao"=>"6 meses", "img"=>"img/python.png"],
    //     ["nome"=>"Curso Django", "preco"=>2500.00, "duracao"=>"2 meses", "img"=>"img/django.png"],
    //     ["nome"=>"Curso Laravel", "preco"=>1500.00, "duracao"=>"3 meses", "img"=>"img/laravel.png"]
    // ];
    $nomeArquivo = "produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo),true);

    $categorias = ["Cursos", "Palestras", "Artigos"];

?>