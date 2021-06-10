<?php
class Menu {

  /**
   * @var string $_name -> nom du menu
   * @var string $_motto -> slogan du menu
   * @var mixed $_validFrom  -> date de début du menu au format fr
   * @var mixed $_validTo -> date de fin de validité du menu au format fr
   */
  private string $_name;
  private string $_motto;
  private dateTime $_validFrom;
  private dateTime $_validTo;

  /**
   * @param string $_name -> nom du menu
   * @param string $_motto -> description du menu
   * @param mixed $_validFrom  -> date de début du menu
   * @param mixed $_validTo -> date de fin de validité du menu 
   */

   public function __construct($_name, $_motto, $_validFrom, $_validTo)
   {
     $this -> name = $_name;
     $this -> motto = $_motto;
     $this -> validFrom = new dateTime($_validFrom);
     $this -> validTo = new dateTime($_validTo);
   }
}