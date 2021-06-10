<?php
class Employee {

  /**
   * @var string $_firstName -> prénom de l'employé
   * @var string $_lastName -> nom de famille de l'employé
   */
  private string $_firstName;
  private string $_lastName;

  /**
   * @param string $_firstName -> prénom de l'employé
   * @param string $_lastName -> nom de famille de l'employé
   */

   public function __construct($_firstName, $_lastName)
   {
     $this -> firstName = $_firstName;
     $this -> lastName = $_lastName;
   }

   public function IsAtWork() {
   }

  /** Méthode pour récupérer le nom de l'employé
   * @param string $lastName -> nom de famille de l'employé
   */
   public function getName($_lastName) {
     echo $this -> lastName = $_lastName;
   }
}

class Waiter extends Employee {
  private int $_orders;

  /**
   * @param mixed $orders -> id des commandes que le serveur sert
   */
  public function __construct($_orders, $_firstName, $_lastName) {
    parent::__construct($_firstName, $_lastName);
    $this -> orders = $_orders;
  }
}

class Cook extends Employee {
  private $_meals;

  /**
   * @param mixed $_meals -> repas que le cuisinier cuisine
   */
  public function __construct($_meals, $_firstName, $_lastName) {
    parent::__construct($_firstName, $_lastName);
    $this -> meals = $_meals;
  }
}