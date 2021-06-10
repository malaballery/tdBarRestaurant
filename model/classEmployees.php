<?php
class Employee {

  /**
   * @var string $FirstName -> prénom de l'employé
   * @var string $LastName -> nom de famille de l'employé
   */
  private $firstName;
  private $lastName;

  /**
   * @param string $firstName -> prénom de l'employé
   * @param string $lastName -> nom de famille de l'employé
   */

   public function __construct($firstName, $lastName)
   {
     $this -> firstName = $firstName;
     $this -> lastName = $lastName;
   }

   public function IsAtWork() {
   }

  /** Méthode pour récupérer le nom de l'employé
   * @param string $lastName -> nom de famille de l'employé
   */
   public function getName($lastName) {
     echo $this -> lastName = $lastName;
   }
}

class Waiter extends Employee {
  private $orders;

  /**
   * @param mixed $orders -> commandes que le serveur sert
   */
  public function __construct($orders, $firstName, $lastName) {
    parent::__construct($firstName, $lastName);
    $this -> orders = $orders;
  }
}

class Cook extends Employee {
  private $meals;

  /**
   * @param mixed $meals -> repas que le cuisinier cuisine
   */
  public function __construct($meals, $firstName, $lastName) {
    parent::__construct($firstName, $lastName);
    $this -> meals = $meals;
  }
}