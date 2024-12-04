<?php
    /*
    require_once 'C:\xampp\htdocs\desarrollowebCV\proyecto_Final1EvRolePlayingGame\app\controllers\CreatureController.php';
    //Recupero de la BD todos las creature a través del creatureController
    $creatures = new CreatureController();//NO ENTIENDO PORQUE HACE FALTA USAR UN CREATURECONTROLLER COMO INTERMEDIARIO ENTRE EL CREATUREDAO Y ESTE FICHERO.
    $creatures->readAction();
    echo var_dump($creatures);
    */
    

    //ESTE CODIGO DE ABAJO LO HAGO PORQUE EL CODIGO DE ARRIBA, QUE ES COMO EL CODIGO QUE TIENE LA SOLUCION ARTEAN3 DEL PROFE, NO ME FUNCIONA.
    //require_once 'C:\xampp\htdocs\desarrollowebCV\proyecto_Final1EvRolePlayingGame\app\models\Creature.php';

    require_once(dirname(__FILE__) . '/../models/Creature.php');
    
    require_once 'C:\xampp\htdocs\desarrollowebCV\proyecto_Final1EvRolePlayingGame\persistence\DAO\CreatureDAO.php';
    
    $creatureDAO = new CreatureDAO();
    $creatures = $creatureDAO->selectAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Role Playing Game</title>
    <!------------ Bootstrap Core CSS ------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!------------ Iconos ------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<!-- Navigation -->
<nav class="navbar bg-dark-subtle navbar-expand-lg p-3 mb-4">
    <a class="navbar-brand" href="#">
        <img src="../../assets/img/massEffectLogo.svg" alt="logo" width="100" height="50"/>
    </a>
    <a class="text-decoration-none text-secondary ms-3" id="linkFormInsert" href="formInsertCreature.php">Crear una criatura</a>
</nav>

<!-- Header -->
<div class="container-xl mb-5">
    <div class="row py-2">
        <div class="col-8">
            <img class="rounded img-fluid" src="../../assets/img/charactersShadows.png" alt="">
        </div>
        <div class="col-4">
            <h1 class="display-2">Comunidad de usuarios de Mass Effect</h1>
            <p class="lead">La aventura comienza aca, en tu navegador</p>
            <button type="button" class="btn btn-primary">Jugá ahora!</button>
        </div>
    </div>
</div>

<!-- Content -->
<div class="container mt-5">
    <div class="row">
        <?php
            for($i = 0; $i < sizeof($creatures); $i++){
                echo $creatures[$i]->creatureHTML();
            }
        ?>

    </div>
</div>


<!-- JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>









