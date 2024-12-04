<?php
    require_once 'C:\xampp\htdocs\desarrollowebCV\proyecto_Final1EvRolePlayingGame\persistence\DAO\CreatureDAO.php';
    //echo (dirname(__FILE__) . "/../persistence/DAO/CreatureDAO.php");
    //require_once(dirname(__FILE__) . "/../../persistence/DAO/CreatureDAO.php");

 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $creatureDAO = new CreatureDAO(); // Asume que tienes una clase DAO para manejar tus datos
        $creature = $creatureDAO->selectById($id); // Método que recupera el objeto por ID
        
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
    }
    /*
    if (isset($creature)) {
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
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
<!-- Content -->
<div class="mt-5 mx-auto" style="width: 700px;">
    <div class="row">
        <form id="creatureForm" method="POST" action="../controllers/CreatureController.php">
            <input type="hidden" name="type" value="edit">
            <div class="form-group d-flex">
                <label for="name" id="name-label">Name: </label>
                <input type="text" placeholder="Name" id="name" class="ms-3 mb-3 flex-grow-1" name="name" value="<?php echo $name;?>" required/>
            </div>
            <div class="form-group d-flex">
                <label for="description" id="name-label">Description: </label>
                <input type="text" placeholder="Description" id="" class="ms-3 mb-3 flex-grow-1" name="description" value="<?php echo $description;?>" required/>
            </div>
            <div class="form-group d-flex">
                <label for="avatar" id="name-label">Avatar: </label>
                <input type="text" placeholder="Avatar" id="" class="ms-3 mb-3 flex-grow-1" name="avatar" value="<?php
                echo $avatar;?>" required/>
            </div>
            <div class="form-group d-flex">
                <label for="attackPower" id="name-label">Attack Power: </label>
                <input type="text" placeholder="Attack Power" id="" class="ms-3 mb-3 flex-grow-1" name="attackPower" value="<?php
                echo $attackPower;?>" required/>
            </div>
            <div class="form-group d-flex">
                <label for="lifeLevel" id="name-label">Life Level: </label>
                <input type="text" placeholder="Life Level" id="" class="ms-3 mb-3 flex-grow-1" name="lifeLevel" value="<?php
                echo $lifeLevel;?>" required/>
            </div>
            <div class="form-group d-flex">
                <label for="weapon" id="name-label">Weapon: </label>
                <input type="text" placeholder="Weapon" id="" class="ms-3 mb-3 flex-grow-1" name="weapon" value="<?php
                echo $weapon;?>" required/>
            </div>
            <input type="hidden" name="id" value="<?php echo $id?>"/>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Modificar"/>
            </div>
        </form>
        
    </div>
</div>


<!-- JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>










