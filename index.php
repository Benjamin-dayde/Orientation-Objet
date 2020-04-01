<?php

class Personnage {

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
        echo $this->nom ." Force ".$this->force."/100 |"."| Shield ".$this->shield."/100 || Arme ".$this->arme."/100 |"."| HP ".$this->hp." points/100, état de santé ".$etat."<br>"."<hr>"; 
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

    function attaque($perso) {
        
        if ($this->setShield($perso) == 0) {
            $perso->setShield($perso->getshield() - ($this->force + $this->arme));
        } else {
            $perso->setHp($perso->getHp() - ($this->force + $this->arme));
        }

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
        $this->degats($perso);
        parent::attaque($perso);
    }

    function tireFleche() {
        echo $this->nom." l'".Archer::class." tire des flèche de ".($this->force+$this->arme)." point de dégats. <br> <hr>";
    }

    function degats(Personnage $perso) {
       if($perso instanceof Mage) {
        $perso->setHp($perso->getHp() - 10);
       } else {
           $perso->setHp($perso->getHp() - 40);
       }
    }

};

class Guerrier extends Personnage {

    function attaque($perso) {
        $this->FrappeLourde();
        $this->degats($perso);
        parent::attaque($perso);
    }

    function FrappeLourde() {
        echo $this->nom." le ".Guerrier::class." a une force de ".($this->force+$this->arme)." et frappe a la hâche <br><hr>";
    }

    function degats(Personnage $perso) {
        if($perso instanceof Archer) {
         $perso->setHp($perso->getHp() - 30);
        } else {
            $perso->setHp($perso->getHp() - 70);
        }
     }
};

class Mage extends Personnage {

    function attaque($perso) {
        $this->lanceSort();
        $this->degats($perso);
        parent::attaque($perso);
    }

    function lanceSort() {
        echo $this->nom." le ".Mage::class." a une force de ".$this->force." et lance des sort <br><hr>";
    }

    function degats(Personnage $perso) {
        if($perso instanceof Guerrier) {
         $perso->setHp($perso->getHp() - 30);
        } else {
            $perso->setHp($perso->getHp() - 2);
        }
     }

};



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
$perso3->setShield(100);

$personnages = [
    $perso1, $perso2, $perso3
];

do {

    $rand1 = array_rand($personnages);
    $rand2 = array_rand($personnages);

} while ($rand1 == $rand2);

echo "----------------------le challenger arrive. ------------------------- <br> <hr>";

$personnages[$rand1]->carateristique();

echo "------------------------Avant l'attaque. ------------------------------ <br> <hr>";

$personnages[$rand2]->carateristique();

echo "----------------------------".$personnages[$rand1]->getNom()." attaque --------------------------------------- <br><hr>";

$personnages[$rand1]->attaque($personnages[$rand2]);

echo "-----------------------Aprés l'attaque ------------------------------- <br> <hr>";

$personnages[$rand2]->carateristique();

echo "--------------------Il attaque a nouveaux. ------------------------- <br> <hr>";

$personnages[$rand1] ->attaque($personnages[$rand2]);

echo "------------------Aprés la nouvelle attaque ---------------------- <br> <hr>";

$personnages[$rand2]->carateristique();






