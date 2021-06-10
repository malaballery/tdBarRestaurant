<?php
class Table {

  /**
   * @var int $number -> numéro de la table
   * @var mixed $description -> description de la table
   * @var int $chairs -> nombre de chaises
   */
  private $number;
  private $description;
  private $chairs;

  /**
   * @param int $number -> numéro de la table
   * @param string $description -> description de la table
   * @param int $chairs -> nombre de chaises
   */
   public function __construct($number, $description, $chairs)
   {
    $this -> number = $number;
    $this -> description = $description;
    $this -> chairs = $chairs;
   }
  
}