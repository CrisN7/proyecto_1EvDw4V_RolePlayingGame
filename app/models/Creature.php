<?php

class Creature {
    
    //PORQUE PRIVADAS --------
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;
    
    //ENTENDER PORQUE solo definimos un constructor vacio, y solamente creamos los getters y setters ------------
    public function __construct() {
        
    }
    
    public function getIdCreature() {
        return $this->idCreature;//SI LLAMAMOS A UNA PROPIEDAD CON EL THIS, CREO QUE NO HACE FALTA QUE LA PROPIEDA LLEVE EL PREFIJO $
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function getLifeLevel() {
        return $this->lifeLevel;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function setIdCreature($idCreature){//: void { ENTENDER ESTO QUE ESTABA ORIGINALMENTE
        $this->name = $idCreature;
    }
    
    public function setName($name){//: void { ENTENDER ESTO QUE ESTABA ORIGINALMENTE
        $this->name = $name;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }

    public function setAttackPower($attackPower){
        $this->attackPower = $attackPower;
    }

    public function setLifeLevel($lifeLevel){
        $this->lifeLevel = $lifeLevel;
    }

    public function setWeapon($weapon){
        $this->weapon = $weapon;
    }


    
    //Función para pintar cada ofertas
    function creatureHTML() {
        
        $result = '<div class="col col-sm-12 col-md-6 col-lg-4">';
        $result .= '<div class="card h-100">';
        $result .= '<div class="card-body">';
        $result .= '<h4 class="card-title">' . $this->getName() . '</h4>';
        $result .= '<p class="card-text">';      
        $result .= '<img class="img-fluid float-start me-3" src="' . $this->getAvatar() . '" style="width: 200px; height: 260px;" alt="Card image">' . $this->getDescription() . '</p></div>';       
        $result .= '<div class="card-footer bg-white d-flex justify-content-evenly">';       
        $result .= '<a href="#" class="btn btn-secondary flex-grow-1 mx-1">Info</a>';//AGREGAR EL LINK A LOS BOTONES       
        $result .= '<a href="#" class="btn btn-success flex-grow-1 mx-1">Modificar</a>';      
        $result .= '<a href="#" class="btn btn-danger flex-grow-1 mx-1">Borrar</a>';       
        $result .=  '</div></div></div>';
        return $result;
    }
    
}



?>