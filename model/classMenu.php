<?php
class Menu {

  /**
   * @var string $name -> nom du menu
   * @var string $motto -> slogan du menu
   * @var mixed $validFrom  -> date de début du menu au format fr
   * @var mixed validTo -> date de fin de validité du menu au format fr
   */
  private string $name;
  private string $motto;
  private dateTime $validFrom;
  private dateTime $validTo;

  /**
   * @param string $name -> nom du menu
   * @param string $motto -> description du menu
   * @param mixed $validFrom  -> date de début du menu
   * @param mixed validTo -> date de fin de validité du menu 
   */

   public function __construct($name, $motto, $validFrom, $validTo)
   {
     $this -> name = $name;
     $this -> motto = $motto;
     $this -> validFrom = new dateTime($validFrom);
     $this -> validTo = new dateTime($validTo);
   }
}