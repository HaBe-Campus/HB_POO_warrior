<?php

require_once __DIR__ . "/../base/localWarrior.php";

$GLOBALS['warriorID'] = 'hamid';


//class Warrior extends StartrekWarrior{};
// Définissez vos class de combattants


abstract class Warrior extends LocalWarrior {
  
   public $id;
   public $name;
   public $speed=30;
   public $life=100;
   public $shield=20;
   public $imageUrl;
   public $weapon;

   public function __construct($id){
        $this->id = $id;
   }
  public function setWeapon(Weapon $weapon){
      $this->weapon=$weapon;

  }
  public function setImageUrl($url){
      $this->imageUrl = $url;
  }
};

class StartrekWarrior extends Warrior{
    public $mentalPower = 8;
    public function __construct($id){
        parent::__construct($id);
    }
    
    
    public function power()
    {
        return $this->mentalPower;
    }
}

class MarvelWarrior extends Warrior
{
    public $superPower = 100;
    public function __construct($id){
        parent::__construct($id);
    }
    
    public function power()
    {
         return $this->superPower;
    }
}
class PokemonWarrior extends Warrior
{
    public $level = 1;
    public function __construct($id){
        parent::__construct($id);
    }
   
    public function power()
    {
        return $this->level;
    }
}

class Weapon{
    public $id;
    public $strength;
    public $imageUrl;

    public function __construct($id,$strength){
        $this->id=$id;
        $this->strength=$strength;
    }
    public function setImageUrl($url){
        $this->imageUrl = $url;
    }
}

