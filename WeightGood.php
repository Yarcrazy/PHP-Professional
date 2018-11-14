<?php

class WeightGood extends Good_Abstract
{
  public function getFinalPrice() {
    return $this->price;
  }
}