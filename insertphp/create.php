<?php

$mysqli = new mysqli("localhost","dbadmin","123","teste");

if (isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($mysqli, $_POST['fname']);

    $sql ="INSERT INTO nome (nome) VALUE ('$nome')";
    
    if (mysqli_query($mysqli, $sql)):
        header('Location: index.php?sucesso');
    else:
        header('Location: index.php?falha');
    endif;
endif;