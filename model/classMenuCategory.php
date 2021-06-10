<?php
class MenuCategory {

  /**
   * @var string $_name -> nom de la catégorie
   * @var string $_description -> description de la catégorie
   * @var int $_category -> id de la catégorie 
   */
  private string $_name;
  private string $_description;
  private int $_category;

  /**
   * @param string $_name -> nom de la catégorie
   * @param string $_description -> description de la catégorie
   * @param int $_category -> id de la catégorie 
   */

   public function __construct($_name, $_description, $_category)
   {
     $this -> name = $_name;
     $this -> description = $_description;
     $this -> category = $_category;
   }
}