<?php
class OrderItem {

  /**
   * @var string $_meal -> nom du plat principal
   * @var mixed $_quantity -> quantité de plat commandé
   * @var string $_sideDishes -> nom du plat secondaire
   * @var string $_note -> notes sur la commande
   * @var int $_cook -> id du cuisinier
   * @var mixed $_status -> statut de la commande du plat
   */
  private string $_meal;
  private mixed $_quantity;
  private string $_sideDishes;
  private string $_note;
  private int $_cook;
  private mixed $_status;

  /**
   * @param string $_meal -> nom du plat principal
   * @param mixed $_quantity -> quantité de plat commandé
   * @param string $_sideDishes -> nom du plat secondaire
   * @param string $_note -> notes sur la commande
   * @param int $_cook -> id du cuisinier
   * @param mixed $_status -> statut de la commande du plat
   */

   public function __construct($_meal, $_quantity, $_sideDishes, $_note, $_cook, $_status)
   {
    $this -> meal = $_meal;
    $this -> quantity = $_quantity;
    $this -> sideDishes = $_sideDishes;
    $this -> note = $_note;
    $this -> cook = $_cook;
    $this -> status = $_status;
   }

  /** Méthode pour amorcer la commande d'un plat
   *  
   */
   public function enlist()
   {

   }

  /** Méthode pour commencer la préparation du plat
   *  
   */
   public function startcooking()
   {
   
   }

  /** Méthode pour marquer le plat comme cuisiné
   *  
   */
   public function markAsCooked()
   {


  /** Méthode pour servir le plat
   *  
   */
   }
   public function serve()
   {
  
  /** Méthode pour payer le plat
   *  
   */
   }
   public function pay()
   {

  /** Méthode pour annuler un plat
   *  
   */
   }
   public function cancel()
   {
   
   }
  
}