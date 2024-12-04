<?php

require_once 'C:\xampp\htdocs\desarrollowebCV\proyecto_Final1EvRolePlayingGame\persistence\DAO\CreatureDAO.php';



$_CreatureController = new CreatureController();

//Esto creo que nunca se va a cumplir porque el formulario tiene un POST, a no ser que lo cambie cuando vaya al form desde el boton modificar. Creo que la parte del requestmethod==get esta al pedo, porque si le paso el parametro id por la url, se "transformaria a un get", segun yo.
//Este codigo de abajo creo que lo copie de como tiene el offercontroller la solucion del profe, igual le falta el else.
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $_CreatureController->deleteAction();
}


// Enrutamiento de las acciones
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //if ($_POST["type"] == "create"){
    //    $_CreatureController->createAction();
    //}
    if ($_POST["type"] == "edit"){
        $_CreatureController->editAction();
    }
    //else if ($_POST["type"] == "apply"){
    //    $_offerController->applyAction(SessionUtils::getIdUser());
    //}
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
    
    // Función encargada de actualizar las creature
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

        header('Location: ../views/index.php');
    }
    
    
    function deleteAction() {
        $id = $_GET["id"];

        $creatureDAO = new CreatureDAO();
        $creatureDAO->delete($id);

        header('Location: ../views/index.php');
    }
}




?>