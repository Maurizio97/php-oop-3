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
    class Computer{
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
            $this -> code = $code;
        }

        public function getTemplate(){
            return $this -> template;
        }

        public function setTemplate($template){
            $this -> template = $template;
        }

        public function getPrice(){
            return $this -> price;
        }

        public function setPrice($price){
            $this -> price = $price;
        }

        public function getBrand(){
            return $this -> brand;
        }

        public function setBrand($brand){
            $this -> brand = $brand;
        }
    }
    ?>