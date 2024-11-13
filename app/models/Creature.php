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


    
    
    
}



?>