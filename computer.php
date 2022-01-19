<!-- Definire classe Computer:
     *          ATTRIBUTI:
     *          - codice univoco
     *          - modello
     *          - prezzo
     *          - marca
     * 
     *          METODI:
     *          - costruttore che accetta codice univoco e prezzo
     *          - proprieta' getter/setter per tutte le variabili d'istanza
     *          - printMe: che stampa se stesso (come quella vista a lezione)
     *          - toString: "marca modello: prezzo [codice univoco]"
     * 
     *          ECCEZIONI:
     *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
     *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
     *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
     * 
     *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
     *      il corretto funzionamento dell'algoritmo -->


    <?php

    trait Meth {
        public function printMe(){
            echo $this . "<br>";
        }

        public function checkCar($var){
            if(strlen($var) < 3 || strlen($var) > 20){
                return throw new Exception($var . " isn't valid");
            }
        }
    }

    class Computer{
        use Meth; 

        private $code;
        private $template;
        private $price;
        private $brand;

        public function __construct($code, $price){
            $this -> setCode($code);
            $this -> setPrice($price);
        }

        public function getCode(){
            return $this -> code;
        }

        public function setCode($code){
            if(strlen($code) != 6 || !is_numeric($code) )
            throw new Exception("This code isn't valid");
            else
            $this -> code = $code;
        }

        public function getTemplate(){
            return $this -> template;
        }

        public function setTemplate($template){
            $val = $this -> checkCar($template);
            if($val)
            return $val;
            else
            $this -> template = $template;
        }

        public function getPrice(){
            return $this -> price;
        }

        public function setPrice($price){
            if(!is_int($price) || $price < 0 || $price > 2000 )
            throw new Exception("Price isn't valid");
            else
            $this -> price = $price;
        }

        public function getBrand(){
            return $this -> brand;
        }

        public function setBrand($brand){
            $val = $this -> checkCar($brand);
            if($val)
            return $val;
            else
            $this -> brand = $brand;
        }

        public function __toString(){
            // "marca modello: prezzo [codice univoco]"
            echo "Marca:" . $this -> getBrand() . "<br>"
                . $this -> getTemplate() . ": "
                . $this -> getPrice() . "$ "
                . "[" . $this -> getCode() . "]";

        }
    }

    try {
        $pc = new Computer("123456", 2000);

        $pc -> setBrand("Apple");
        $pc -> setTemplate("MacBook Pro");

        $pc -> printMe();
    }catch(Exception $e){
        echo "<h1>" . $e -> getMessage() ."</h1>";
    }
    

    ?>