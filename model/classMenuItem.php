<?php
class MenuItem {

  /**
   * @var string $name -> nom de l'item
   * @var string $description -> description de l'item
   * @var mixed $price -> prix de l'item
   * @var mixed $meal -> relié à la table meal qui décrit en détails le meal 
   */
  private $name;
  private $description;
  private $price;
  private $meal;

  /**
   * @param string $name -> nom de l'item
   * @param string $description -> description de l'item
   * @param mixed $price -> prix de l'item
   * @param mixed $meal -> relié à la table meal qui décrit en détails le meal 
   * 
   * return un tableau avec l'item du menu
   */

   public function __construct($name, $description, $price, $meal)
   {
     $tabMenuItem = [$this -> name = $name, $this -> description = $description, $this -> price = $price, $this -> meal = $meal];
     return $tabMenuItem;
   }

  /** Méthode pour afficher le contenu d'un item du menu
   *  
   * return tout le contenu d'un item du menu
   */

   public function getMenuItem() {
    echo 'Nom : '.$this -> name.'<br>';
    echo 'Quoi-est-ce ? : '.$this -> description.'<br>';
    echo 'Prix : '.$this -> price.'€ <br>';
    echo 'id du meal : '.$this -> meal;
   }
}