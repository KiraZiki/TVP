<?php

    require_once "Cliente.php";
    require_once "ClienteFisico.php";
    require_once "Teste.php";
    require_once "ClienteJuridico.php";

//$cliente = new Cliente();
//não pode instanciar um objeto da superclasse abstrata

$cf = new ClienteFisico();
$cf -> setCodigo(1);
$cf -> setNome("Ana");
$cf -> setIdade(21);
$cf -> setRG("11.111.111-0");
$cf -> setCPF("111.111.111-00");
$cf -> mostrarDados();

$cj = new ClienteJuridico();
$cj -> setCodigo(2);
$cj -> setNome("Daniel");
$cj -> setIdade(41);
$cj -> setCNPJ("111.111.111.111-00");
$cj -> setIE("123456789");
$cj -> mostrarDados();


$teste = new Teste();
$teste -> verificaIdade($cf);

?>