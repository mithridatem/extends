<?php
    class Utilisateur{
        //attributs
        protected $name;
        protected $firstName;
        //constructeur
        public function __construct($name, $first){
            $this->name = $name;
            $this->firstName = $first;
        }
        //getter and setter
        public function getName():string{
            return $this->name;
        }
        public function getFirstName():string{
            return $this->firstName;
        }
        public function setName($name):void{
            $this->name = $name;
        }
        public function setFirstName($first):void{
            $this->firstName = $first;
        }
        //Méthodes
        public function showUser():void{
            echo 'Nom : '.$this->getName().' 
            Prénom : '.$this->getFirstName().'';
        }
    }
?>