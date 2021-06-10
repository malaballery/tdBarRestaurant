<?php
class MenuItem {

  /**
   * @var string $_name -> nom de l'item
   * @var string $_description -> description de l'item
   * @var mixed $_price -> prix de l'item
   * @var mixed $_meal -> relié à la table meal qui décrit en détails le meal 
   */
  private string $_name;
  private string $_description;
  private mixed $_price;
  private mixed $_meal;

  /**
   * @param string $_name -> nom de l'item
   * @param string $_description -> description de l'item
   * @param mixed $_price -> prix de l'item
   * @param mixed $_meal -> relié à la table meal qui décrit en détails le meal 
   * 
   * return un tableau avec l'item du menu
   */

   public function __construct($_name, $_description, $_price, $_meal)
   {
    $this -> name = $_name;
    $this -> description = $_description;
    $this -> price = $_price;
    $this -> meal = $_meal;
     
   }

  /** Méthode pour afficher le contenu d'un item du menu
   *  
   * return tout le contenu d'un item du menu
   */

   public function getMenuItem() {
    $tabMenuItem = ['name' => $this -> name, 'description' => $this -> description, 'price' => $this -> price, 'meal' => $this -> meal];
    return $tabMenuItem;
   }
}