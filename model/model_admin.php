<?php
    class Admin extends utilisateur{
        //attributs
        protected $activate; 
        //getter and setter
        //redéfinition dans la classe
        public function getName():string{
            //retourne le nom en Majuscule 
            return strtoupper($this->name);
        }
        //méthodes 
        //activer un compte Utilisateur (objet)
        public function setActiveUser($obj):void{
            //ajouter le nom dans la liste activate(tableau)
            $this->activate[] = $obj;
        }
        //affichage de la liste des comptes activés
        public function getActiveUser():void{
            echo 'Liste des comptes Utilisateurs activés :';
            //boucle affichage des comptes(objets)
            foreach($this->activate as $value){
                echo '<p>'.$value->name.' '.$value->firstName.',</p>';
            }
        }
    }
?>