<?php
class Table {

  /**
   * @var int $_number -> numéro de la table
   * @var mixed $_description -> description de la table
   * @var int $_chairs -> nombre de chaises
   */
  private int $_number;
  private mixed $_description;
  private int $_chairs;

  /**
   * @param int $_number -> numéro de la table
   * @param string $_description -> description de la table
   * @param int $_chairs -> nombre de chaises
   */
   public function __construct($_number, $_description, $_chairs)
   {
    $this -> number = $_number;
    $this -> description = $_description;
    $this -> chairs = $_chairs;
   }
  
}