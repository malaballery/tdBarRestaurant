<?php
class Order {

  /**
   * @var int $number -> numéro de la commande
   * @var int $table -> id de la table de la commande
   * @var int $waiter -> id du serveur qui s'occupe de la commande
   * @var mixed $creationDate -> horaire de création de la commande
   * @var mixed $paidDate -> horaire d'encaissement de la commande
   * @var mixed $gratuity -> pourboire de la commande
   * @var boolean $isVipGuest -> si le client est VIP ou non
   */
  private $number;
  private $table;
  private $waiter;
  private $creationDate;
  private $paidDate;
  private $gratuity;
  private $isVipGuest;

  /**
   * @param int $number -> numéro de la commande
   * @param int $table -> id de la table de la commande
   * @param int $waiter -> id du serveur qui s'occupe de la commande
   * @param mixed $creationDate -> horaire de création de la commande
   * @param mixed $paidDate -> horaire d'encaissement de la commande
   * @param mixed $gratuity -> pourboire de la commande
   * @param boolean $isVipGuest -> si le client est VIP ou non
   */

   public function __construct($number, $table, $waiter, $creationDate, $paidDate, $gratuity, $isVipGuest)
   {
    $this -> number = $number;
    $this -> table = $table;
    $this -> waiter = $waiter;
    $this -> creationDate = $creationDate;
    $this -> paidDate = $paidDate;
    $this -> gratuity = $gratuity;
    $this -> isVipGuest = $isVipGuest;
   }

  /** Méthode pour payer la commande
   *  
   * return le prix de la commande
   */
   public function pay()
   {
   }

  /** Méthode pour annuler une commande
   *  
   */
   public function cancel()
   {
   
   }
  
}