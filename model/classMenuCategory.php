<?php
class MenuCategory {

  /**
   * @var string $name -> nom de la catégorie
   * @var string $description -> description de la catégorie
   * @var $category -> id de la catégorie 
   */
  private $name;
  private $description;
  private $category;

  /**
   * @param string $name -> nom de la catégorie
   * @param string $description -> description de la catégorie
   * @param $category -> id de la catégorie 
   */

   public function __construct($name, $description, $category)
   {
     $this -> name = $name;
     $this -> description = $description;
     $this -> category = $category;
   }
}