<?php

require_once 'C:\xampp\htdocs\desarrollowebCV\proyecto_Final1EvRolePlayingGame\persistence\DAO\CreatureDAO.php';


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    
    $_CreatureController = new CreatureController();
    $_CreatureController->deleteAction();
}


class CreatureController {
    
    /**
     * Parameterless constractor.
     */
    public function __construct() {
        
    }
    
    //Obtención de la lista completa de creatures
    function readAction() {
        $creatureDAO= new CreatureDAO();
        return $creatureDAO->selectAll();
    }
    
    // Función encargada de crear nuevas ofertas
    function editAction() {
        // Obtención de los valores del formulario y validación
        $idCreature = $_POST["id"];
        $name = $_POST["name"];
        $description = $_POST["description"];
        $avatar = $_POST["avatar"];
        $attackPower = $_POST["attackPower"];
        $lifeLevel = $_POST["lifeLevel"];
        $weapon = $_POST["weapon"];
        
        // Creación de objeto auxiliar   
        $creature = new Creature();
        $creature->setIdCreature($idCreature);
        $creature->setName($name);
        $creature->setDescription($description);
        $creature->setAvatar($avatar);
        $creature->setAttackPower($attackPower);
        $creature->setLifeLevel($lifeLevel);
        $creature->setWeapon($weapon);
        
        //Creamos un objeto OfferDAO para hacer las llamadas a la BD
        $creatureDAO = new CreatureDAO();
        $creatureDAO->update($creature);

        header('Location: ../../../index.php');
    }
    
    
    function deleteAction() {
        $id = $_GET["id"];

        $creatureDAO = new CreatureDAO();
        $creatureDAO->delete($id);

        header('Location: ../../views/index.php');
    }
}




?>