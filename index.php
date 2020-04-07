<?php

interface Attaquant {
    
    function attaque(Personnage $perso);
}

interface DegatSubits {

    function degatSubits(int $perso);
}

interface Cible {

    function Cible(Personnage $perso);
}



abstract class Personnage implements Attaquant, DegatSubits {

     protected $nom;
     protected $force;
     protected $level;
     protected $hp;
     protected $vie;
     protected $arme;
     protected $shield;

     

    // Affiche les carateristique //

    function carateristique() {
        $etat = ($this->vie)? "mort" : "vivant";
        echo $this->nom ." Force ".$this->force."/100 |"."| Shield ".$this->shield."/100 || Arme ".$this->arme."/100 |"."| HP ".$this->hp." points/100, état de santé ".$etat."<br> <hr>"; 
    }

    // Permet la modification des perso //

    // nom du perso //

    function getNom(): string {
        return $this->nom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    // force du perso //

    function getForce(): int {
        return $this->force;
    }

    function setForce($force) {
        $this->force = $force;
    }

    // Défense du perso // 

    function getShield(): int {
        return $this->shield;
    }

    function setShield($shield) {
        $this->shield = $shield;
    }

    // Niveaux du perso //

    function getLevel(): int {
        return $this->level;
    }

    function setLevel($level) {
        $this->level = $level;
    }

    // Vie du perso //

    function getHp(): int {
        return $this->hp;
    }

    function setHp($hp) {
        $this->hp = $hp;
    }

    // Etat de santé du perso //

    function isVie(): bool {
        return $this->vie;
    }

    function setVie() {
        if($this->hp < 1) {
            $this->vie =  true;
        } else {
            $this->vie = false;
        }
    }

    // Arme du perso //

    function getArme(): int {
        return $this->arme;
    }

    function setArme($arme) {
        $this->arme = $arme;
    }

    // permet l'attaque entre personnage //

    abstract function attaque($perso);

    function degatSubits($perso) {
        if ($perso->getShield() <= 0) {
            $perso->setHp($perso->getHp() - ($this->force + $this->arme));
        } else {
            $perso->setShield($perso->getShield() - ($this->force + $this->arme));
        }
    }

    
    // permet la monté de level d'un personnage //
    function levelUp() {
        $this->level ++ ;
    }



 

};

// Création de class dite fille // 

class Archer extends Personnage {

    

    function attaque($perso) {

        $perso->setVie() ;
        $this->tireFleche();
        //$this->degats($perso);
        parent::degatSubits($perso);
        
    }

    /*function degats(Personnage $perso) {
       if($perso instanceof ) {
        $perso->setHp($perso->getHp() - 10);
       } else {
           $perso->setHp($perso->getHp() - 40);
       }
    }*/

    function tireFleche() {
        echo $this->nom." l'".Archer::class." tire des flèche de ".($this->force+$this->arme)." point de dégats. <br> <hr>";
    }

};

class Guerrier extends Personnage {

    function attaque($perso) {

        $perso->setVie() ;
        $this->FrappeLourde();
        //$this->degats($perso);
        parent::degatSubits($perso);
        
    }

    /*function degats(Personnage $perso) {
        if($perso instanceof Creature) {
         $perso->setHp($perso->getHp() - 10);
        } else {
            $perso->setHp($perso->getHp() - 20);
        }
    }*/

    function FrappeLourde() {
        echo $this->nom." le ".Guerrier::class." a une force de ".($this->force+$this->arme)." et frappe a la hâche <br><hr>";
    }

};

class Mage extends Personnage {

    function attaque($perso) {

        $perso->setVie() ; 
        $this->lanceSort();
        //$this->degats($perso);
        parent::degatSubits($perso);
    }

    /*function degats(Personnage $perso) {
        if($perso instanceof Creature) {
         $perso->setHp($perso->getHp() - 30);
        } else {
            $perso->setHp($perso->getHp() - 2);
        }
    }*/

    function lanceSort() {
        echo $this->nom." le ".Mage::class." a une force de ".($this->force+$this->arme)." et lance des sort <br><hr>";
    }

};

// Creation de mob //

class Creature implements Attaquant, DegatSubits {

    protected $nom;
    protected $force;
    protected $hp;
    protected $vie;
    protected $shield;

    function carateristique() {
        $etat = ($this->vie)? "mort" : "vivant";
        echo $this->nom ." Force ".$this->force."/100 | HP ".$this->hp." points/1000, état de santé ".$etat."<br>"."<hr>"; 
    }

    function getNom(): string {
        return $this->nom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    // force du perso //

    function getForce(): int {
        return $this->force;
    }

    function setForce($force) {
        $this->force = $force;
    }

    // Défense du perso // 

    function getShield() {
        return $this->shield;
    }
        
    function setShield($shield) {
        $this->shield = $shield;
    }

    // Vie du perso //

    function getHp(): int {
        return $this->hp;
    }

    function setHp($hp) {
        $this->hp = $hp;
    }

    // Etat de santé du perso //

    function isVie(): bool {
        return $this->vie;
    }

    function setVie() {
        if($this->hp < 1) {
            $this->vie =  true;
        } else {
            $this->vie = false;
        }
    }

    function attaque(Personnage $perso) {

        $this->degatSubits($perso);
        $perso->setVie() ;
    }



    function degatSubits($perso) {
        if ($perso->getShield() <= 0) {
            $perso->setHp($perso->getHp() - ($this->force));
        } else {
            $perso->setShield($perso->getShield() - ($this->force));
        }

        echo "le boss a infligé ".$this->force." point de dégats <br> <hr>";
    }




}
// Implementation des mob //

$creature1 = new Creature();
$creature1->setNom("Yorm the giant");
$creature1->setForce(100);
$creature1->setHp(1000);

$creature2 = new Creature();
$creature2->setNom("Legion de Farron");
$creature2->setForce(50);
$creature2->setHp(1000);

$creature3 = new Creature();
$creature3->setNom("Aldrich le dévoreur de monde");
$creature3->setForce(70);
$creature3->setHp(1000);



// implementation des personnage et modification //

$perso1 = new Archer();
$perso1->setNom("Robin des bois");
$perso1->setForce(15);
$perso1->setLevel(1);
$perso1->setHp(100);
$perso1->setArme(50);
$perso1->setShield(75);


$perso2 = new Guerrier();
$perso2->setNom("Grübok");
$perso2->setForce(30);
$perso2->setLevel(3);
$perso2->setHp(100);
$perso2->setArme(30);
$perso2->setShield(100);


$perso3 = new Mage();
$perso3->setNom("Merlin");
$perso3->setForce(50);
$perso3->setLevel(2);
$perso3->setHp(100);
$perso3->setArme(10);
$perso3->setShield(15);

$personnages = [
    $perso1, $perso2, $perso3
];

do {

    $rand1 = array_rand($personnages);
    $rand2 = array_rand($personnages);

} while ($rand1 == $rand2);

$creatures = [
    $creature1, $creature2, $creature3
];

do {

    $rand3 = array_rand($creatures);
    $rand4 = array_rand($creatures);

} while ($rand3 == $rand4);




echo "----------------------le Boss arrive. ------------------------- <br> <hr>";

$personnages[$rand1]->carateristique();

echo "------------------------Avant l'attaque. ------------------------------ <br> <hr>";

$creatures[$rand3]->carateristique();

echo "----------------------------".$personnages[$rand1]->getNom()." attaque --------------------------------------- <br><hr>";

$personnages[$rand1]->attaque($creatures[$rand3]);

echo "-----------------------Aprés l'attaque ------------------------------- <br> <hr>";

$creatures[$rand3]->carateristique();

echo "--------------------Il attaque a nouveaux. ------------------------- <br> <hr>";

$personnages[$rand1]->attaque($creatures[$rand3]);

echo "------------------Aprés la nouvelle attaque ---------------------- <br> <hr>";

$creatures[$rand3]->carateristique();






