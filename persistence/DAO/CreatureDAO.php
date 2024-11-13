<?php

require_once(dirname(__FILE__) . "../conf/PersistentManager.php");

class CreatureDAO {
    
    //Se define una constante con el nombre de la tabla
    const TABLE = "creature";
    
    //Variable donde guardamos la conexion a la base de datos
    private $connection = null;
    
    //Constructor de la clase
    public function __construct() {
        $this->connection = PersistentManager::getInstance()->get_connection();//VER ESTO:
        /*CRIS:
         * 
         * 
        PersistentManager::getInstance():
        - PersistentManager es una clase que probablemente esté implementando el patrón Singleton.
        - getInstance() es un método estático de la clase PersistentManager que devuelve una instancia única de la misma, según el patrón Singleton.
        -  ->get_connection(): Una vez que se obtiene la instancia de PersistentManager a través de getInstance(), se llama al método get_connection() de esa instancia.
         ----------
        Explicación Completa:
        La clase PersistentManager tiene un método estático getInstance() que devuelve una única instancia de la clase, probablemente para mantener una conexión persistente a la base de datos o a un recurso compartido.
        La llamada a get_connection() se hace sobre la instancia devuelta, y este método devuelve una conexión (por ejemplo, un objeto de conexión a una base de datos).
        El resultado de get_connection() se asigna a la propiedad $connection de la instancia actual de la clase donde se está ejecutando este código.
        */
    }
    
    
    //ENTENDER PORQUE SOLO ESTOS METODOS, HAY ALGUNOS QUE SIEMPRE SEAN OBLIGATORIOS? Me imagino que se iran construyendo sobre la marcha segun las necesidades.
    
    //Este metodo creo que lo voy a necesitar para imprimir todas las criaturas en el index
    public function selectAll(){
        $query = "SELECT idCreature, name, description, avatar FROM " . CreatureDAO::TABLE;//NO TENER DOS ARCHIVOS CON EL NOMBRE DE LA MISMA CLASE
        $result = mysqli_query($this->connection, $query);//EJECUTAMOS LA CONSULTA A LA BD. CREO QUE SIEMPRE SE USA EL $ PARA USAR LAS VARIABLES
        $creatures = array();//tambien podriamos hacer esto " = []; "
        while($creatureBD = mysqli_fetch_array($result)){
            $creature = new Creature();
            
            $creature->setIdCreature($creatureBD["idCreature"]);
            $creature->setName($creatureBD["name"]);
            $creature->setDescription($creatureBD["description"]);
            $creature->setAvatar($creatureBD["avatar"]);
            
            array_push($creatures, $creature);
        }
        return $creatures;
    }
    
    
    public function insert($creature){
        $query = "INSERTO INTO " . CreatureDAO::TABLE . " (name, description, avatar, attackPower, lifeLevel, weapon) VALUES(?, ?, ?, ?, ?, ?)";//ENTENDER ESTA SINTAXIS. Descripcion TECNICA de esta linea: creamos una CONSULTA PARAMETRIZADA
        $statement = mysqli_prepare($this->connection, $query);
        
        //Creamos las variables que vamos a usar para inicializar los parametros de la consulta parametrizada
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
        
        mysqli_stmt_bind_param($statement, 'sssiis', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);
        return $statement->execute();
    }
    
    
    public function delete($idCreature){
        $query = "DELETE FROM " . CreatureDAO::TABLE . " WHERE idCreature=?";//VER SI FUNCION " . $idCreature"
        $statement = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($statement, "i", $idCreature);
        
        return $statement->execute();
    }
    
}











?>