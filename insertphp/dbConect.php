<?php
$servname = "localhost";
$username = "dbadmin";
$password = "123";
$dbname = "teste";

$connect = mysqli_connect($servname, $username, $password);

if (mysqli_connect_error()):
    echo "ERRO ao COnetar".mysqli_connect_error();
endif;
