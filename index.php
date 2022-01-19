<!-- /**
     * 
     *      Definire classe User:
     *          ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     * 
     */ -->
<?php

trait Meth{
    public function printMe(){
        echo $this;
    }
}

class User {
    use Meth;

    private $username;
    private $password;
    private $age;

    public function __construct($username, $password){
        $this -> setUsername($username);
        $this -> setPassword($password);
    }

    public function getUsername(){
        return $this -> username;
    }

    public function setUsername($username){
        if(strlen($username) < 3 || strlen($username) > 16)
         throw new Exception("Username isn't valid!");
        else
        $this -> username = $username;
    }

    public function getPassword(){
        return $this -> password;
    }

    public function setPassword($password){

        if(ctype_alnum($password))
         throw new Exception("Password contains no special characters!");
        else
        $this -> password = $password;
    }

    public function getAge(){
        return $this -> age;
    }

    public function setAge($age){
        if(!is_int($age))
        throw new Exception("Age isn't a number!");
        else
        $this -> age = $age;
    }

    public function __toString(){
        // username: age [password]
        return $this -> getUsername() . ": " 
        . $this -> getAge() . " " 
        . "[" . $this -> getPassword() . "]" . "<br>";
    }
}

try {
    $user = new User("encke", "Pippo@");
    $user -> setAge(24);

    $user -> printMe();

} catch (Exception $e) {
    echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";
}

?>