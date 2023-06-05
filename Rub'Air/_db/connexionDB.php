<?php
class connexionDB {
    private $host    = 'localhost';  // nom de l'host  
    private $name    = 'rub_air';    // nom de la base de donnée
    private $user    = 'root';       // utilisateur 
    private $pass    = 'root';       // mot de passe (il faudra peut-être mettre '' sous Windows)
    private $connexion;
    
    function __construct($host = null, $name = null, $user = null, $pass = null){
        if($host != null){
            $this->host = $host;           
            $this->name = $name;           
            $this->user = $user;          
            $this->pass = $pass;
        }
        try {
            $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
                $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8MB4', 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            echo 'Erreur : Impossible de se connecter à la BDD !';
            echo 'Erreur : ' . $e->getMessage(); // Affiche le message d'erreur spécifique à PDO
            die();
        }
    }

    public function DB(){
        return $this->connexion;
    }
}

$BDD = new connexionDB();
$BD = $BDD->DB();

?>