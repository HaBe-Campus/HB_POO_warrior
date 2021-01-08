<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
   public static function createMyWarrior(){
        $guerrier = new MarvelWarrior($GLOBALS['warriorID']);
        $weapon = new Weapon('Boule de Feu', 100);
        $weapon->setImageUrl('https://thumbs.dreamstime.com/z/super-pouvoir-ic%C3%B4ne-du-feu-%C3%A9l%C3%A9ment-d-de-pour-des-applis-mobiles-concept-et-web-le-pictogramme-peut-%C3%AAtre-employ%C3%A9-131941960.jpg');
        $guerrier->setWeapon($weapon);
        $guerrier->setImageUrl('https://images-na.ssl-images-amazon.com/images/I/61v1caoEnlL._AC_UL1024_.jpg');
        $guerrier->saveNew();
    }
  

   public static function createOtherWarrior()
   {
        $warrior = new StartrekWarrior('Hamid');
        $weapon = new Weapon('Passe Laser',100);
        $weapon->setImageUrl('https://www.google.com/url?sa=i&url=https%3A%2F%2Finitiald.fandom.com%2Fwiki%2FBunta_Fujiwara&psig=AOvVaw26kSmWwU7uNKmyknAvtzQ8&ust=1610118010946000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNDzkLOKiu4CFQAAAAAdAAAAABAE');
        $warrior->setWeapon($weapon);
        $warrior->setImageUrl('https://www.google.com/url?sa=i&url=https%3A%2F%2Finitiald.fandom.com%2Fwiki%2FBunta_Fujiwara&psig=AOvVaw26kSmWwU7uNKmyknAvtzQ8&ust=1610118010946000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNDzkLOKiu4CFQAAAAAdAAAAABAE');
        $warrior->saveNew();
   }

  }