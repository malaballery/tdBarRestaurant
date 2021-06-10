<?php
class Order {

  /**
   * @var int $_number -> numéro de la commande
   * @var int $_table -> id de la table de la commande
   * @var int $_waiter -> id du serveur qui s'occupe de la commande
   * @var mixed $_creationDate -> horaire de création de la commande
   * @var mixed $_paidDate -> horaire d'encaissement de la commande
   * @var mixed $_gratuity -> pourboire de la commande
   * @var boolean $_isVipGuest -> si le client est VIP ou non
   */
  private int $_number;
  private int $_table;
  private int $_waiter;
  private mixed $_creationDate;
  private mixed $_paidDate;
  private mixed $_gratuity;
  private bool $_isVipGuest;

  /**
   * @param int $_number -> numéro de la commande
   * @param int $_table -> id de la table de la commande
   * @param int $_waiter -> id du serveur qui s'occupe de la commande
   * @param mixed $_creationDate -> horaire de création de la commande
   * @param mixed $_paidDate -> horaire d'encaissement de la commande
   * @param mixed $_gratuity -> pourboire de la commande
   * @param boolean $_isVipGuest -> si le client est VIP ou non
   */

   public function __construct($_number, $_table, $_waiter, $_creationDate, $_paidDate, $_gratuity, $_isVipGuest)
   {
    $this -> number = $_number;
    $this -> table = $_table;
    $this -> waiter = $_waiter;
    $this -> creationDate = $_creationDate;
    $this -> paidDate = $_paidDate;
    $this -> gratuity = $_gratuity;
    $this -> isVipGuest = $_isVipGuest;
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