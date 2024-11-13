<?php

require_once 'C:\xampp\htdocs\desarrollowebCV\proyecto_Final1EvRolePlayingGame\persistence\DAO\CreatureDAO.php';

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
    
    
}




?>