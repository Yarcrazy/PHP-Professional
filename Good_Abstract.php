<?php

abstract class Good_Abstract
{
  public $price, $count;

  public function __construct($price, $count)
  {
    $this->price = $price;
    $this->count = $count;
  }

  abstract public function getFinalPrice();

  public function getTradeIncome() {
    echo "Доход составил: " . ($this->getFinalPrice() * $this->count);
  }
}