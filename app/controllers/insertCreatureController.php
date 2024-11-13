<?php

//echo dirname(__FILE__) . "../../../persistence/DAO/CreatureDAO.php";
require_once("C:/xampp/htdocs/desarrollowebCV/proyecto_Final1EvRolePlayingGame/persistence/DAO/CreatureDAO.php");
require_once("C:/xampp/htdocs/desarrollowebCV/proyecto_Final1EvRolePlayingGame/app/models/Creature.php");
require_once("C:/xampp/htdocs/desarrollowebCV/proyecto_Final1EvRolePlayingGame/app/models/validations/ValidationsRules.php");

//require_once(dirname(__FILE__) . "/../../../../persistence/DAO/CreatureDAO.php");
//require_once(dirname(__FILE__) . "../../models/Creature.php");
//require_once(dirname(__FILE__) . "../../models/validations/ValidationsRules.php");



if($_SERVER["REQUEST_METHOD"] == "POST"){
    createAction();
}

// Función encargada de crear NUEVAS CREATURE
function createAction(){
    
    $name = ValidationsRules::test_input($_POST["name"]);
    $description = ValidationsRules::test_input($_POST["description"]);
    $avatar = ValidationsRules::test_input($_POST["avatar"]);
    $attackPower = ValidationsRules::test_input($_POST["attackPower"]);
    $lifeLevel = ValidationsRules::test_input($_POST["lifeLevel"]);
    $weapon = ValidationsRules::test_input($_POST["weapon"]);
    
    // Creación de objeto auxiliar CRIS: ENTENDER PORQUE SE CREA UN OBJ AUXILIAR
    $creature = new Creature();
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);
    
    //Creamos un objeto UserDAO para hacer las llamadas a la BD. CRIS: ENTENDER EL FLUJO DE ESO--
    $creatureDAO = new CreatureDAO();
    $creatureDAO->insert($creature);
    
    header('Location: ../views/index.php');  
    

    
    
}

?>
