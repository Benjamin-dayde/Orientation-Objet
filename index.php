<?php

class Personnage {

     protected $nom;
     protected $force;
     protected $level;
     protected $hp;
     protected $vie;
     protected $arme;
     

    // Affiche les carateristique //

    function carateristique() {
        $etat = ($this->vie)? "mort" : "vivant";
        echo $this->nom ." a une force de ".$this->force." avec une arme de puissance ".$this->arme.", son état de santé est de ".$this->hp." points/100, notre personnage est donc ".$etat."<br>"."<hr>"; 
    }

    // Permet la modification des perso //

    function getNom(): string {
        return $this->nom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function getForce(): int {
        return $this->force;
    }

    function setForce($force) {
        $this->force = $force;
    }

    function getLevel(): int {
        return $this->level;
    }

    function setLevel($level) {
        $this->level = $level;
    }

    function getHp(): int {
        return $this->hp;
    }

    function setHp($hp) {
        $this->hp = $hp;
    }

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

    function getType(): string {
        return $this->type;
    }
 
    function setType($type) {
        $this->type = $type;
    }

    function getArme(): int {
        return $this->arme;
    }

    function setArme($arme) {
        $this->arme = $arme;
    }

    // permet l'attaque entre personnage //

    function attaque($perso) {
        $perso->setHp($perso->getHp() - ($this->force + $this->arme));
        $perso->setVie() ;
    }
    // permet la monté de level d'un personnage //
    function levelUp() {
        $this->level ++ ;
    }

 

};

// Création de class dite fille // 

class Archer extends Personnage {

    function attaque($perso) {
        $this->tireFleche();
        parent::attaque($perso);
    }

    function tireFleche() {
        echo $this->nom." l'".Archer::class." tire des flèche de ".($this->force+$this->arme)." point de dégats. <br> <hr>";
    }

    function degats(Personnage $perso) {
       if($perso instanceof Mage) {
        $perso->setHp($perso->getHp() - 20);
       } else {
           $perso->setHp($perso->getHp() - 40);
       }
    }

};

class Guerrier extends Personnage {

    function attaque($perso) {
        $this->FrappeLourde();
        parent::attaque($perso);
    }

    function FrappeLourde() {
        echo $this->nom." le ".Guerrier::class." a une force de ".($this->force+$this->arme)." et frappe a la hâche <br><hr>";
    }
};

class Mage extends Personnage {

    function attaque($perso) {
        $this->lanceSort();
        parent::attaque($perso);
    }

    function lanceSort() {
        echo $this->nom." le ".Mage::class." a une force de ".$this->force." et lance des sort <br> ";
    }

};



// implementation des personnage et modification //

$perso1 = new Archer();
$perso1->setNom("Robin des bois");
$perso1->setForce(15);
$perso1->setLevel(1);
$perso1->setHp(100);
$perso1->setArme(50);


$perso2 = new Guerrier();
$perso2->setNom("Grübok");
$perso2->setForce(30);
$perso2->setLevel(3);
$perso2->setHp(100);
$perso2->setArme(30);


$perso3 = new Mage();
$perso3->setNom("Merlin");
$perso3->setForce(50);
$perso3->setLevel(2);
$perso3->setHp(100);
$perso3->setArme(10);

echo "----------------------le challenger arrive. ------------------------- <br> <hr>";

$perso1->carateristique();

echo "------------------------Avant l'attaque. ------------------------------ <br> <hr>";

$perso2->carateristique();

echo "----------------------------".$perso1->getNom()." attaque --------------------------------------- <br><hr>";

$perso1->attaque($perso2);

echo "-----------------------Aprés l'attaque ------------------------------- <br> <hr>";

$perso2->carateristique();

echo "--------------------Il attaque a nouveaux. ------------------------- <br> <hr>";

$perso1->attaque($perso2);

echo "------------------Aprés la nouvelle attaque ---------------------- <br> <hr>";

$perso2->carateristique();


 


