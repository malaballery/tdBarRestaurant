<?php
class OrderItem {

  /**
   * @var string $meal -> nom du plat principal
   * @var mixed $quantity -> quantité de plat commandé
   * @var string $sideDishes -> nom du plat secondaire
   * @var string $note -> notes sur la commande
   * @var int $cook -> id du cuisinier
   * @var mixed $status -> statut de la commande du plat
   */
  private $meal;
  private $quantity;
  private $sideDishes;
  private $note;
  private $cook;
  private $status;

  /**
   * @param string $meal -> nom du plat principal
   * @param mixed $quantity -> quantité de plat commandé
   * @param string $sideDishes -> nom du plat secondaire
   * @param string $note -> notes sur la commande
   * @param int $cook -> id du cuisinier
   * @param mixed $status -> statut de la commande du plat
   */

   public function __construct($meal, $quantity, $sideDishes, $note, $cook, $status)
   {
    $this -> meal = $meal;
    $this -> quantity = $quantity;
    $this -> sideDishes = $sideDishes;
    $this -> note = $note;
    $this -> cook = $cook;
    $this -> status = $status;
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