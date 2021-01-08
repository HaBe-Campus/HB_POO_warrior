<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
    public static function createMyWarrior(){
        $warrior= new StartrekWarrior($GLOBALS['warriorID']);
        $weapon = new Weapon('Coup de Frein à Main',100);
        $weapon->setImageUrl('https://www.google.com/url?sa=i&url=https%3A%2F%2Finitiald.fandom.com%2Fwiki%2FBunta_Fujiwara&psig=AOvVaw26kSmWwU7uNKmyknAvtzQ8&ust=1610118010946000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNDzkLOKiu4CFQAAAAAdAAAAABAE');
        $warrior->setWeapon($weapon);
        $warrior->setImageUrl('https://www.google.com/url?sa=i&url=https%3A%2F%2Finitiald.fandom.com%2Fwiki%2FBunta_Fujiwara&psig=AOvVaw26kSmWwU7uNKmyknAvtzQ8&ust=1610118010946000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNDzkLOKiu4CFQAAAAAdAAAAABAE');
        $warrior->saveNew();
        

    }
    public static function createOtherWarrior(){
      $warrior= new StartrekWarrior('Hamid');
      $weapon = new Weapon('Coup de Frein à Main',100);
      $weapon->setImageUrl('https://www.google.com/url?sa=i&url=https%3A%2F%2Finitiald.fandom.com%2Fwiki%2FBunta_Fujiwara&psig=AOvVaw26kSmWwU7uNKmyknAvtzQ8&ust=1610118010946000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNDzkLOKiu4CFQAAAAAdAAAAABAE');
      $warrior->setWeapon($weapon);
      $warrior->setImageUrl('https://www.google.com/url?sa=i&url=https%3A%2F%2Finitiald.fandom.com%2Fwiki%2FBunta_Fujiwara&psig=AOvVaw26kSmWwU7uNKmyknAvtzQ8&ust=1610118010946000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNDzkLOKiu4CFQAAAAAdAAAAABAE');
      $warrior->saveNew();
      

  }
}