<?php

class PhysicalGood extends Good_Abstract
{
  public function getFinalPrice() {
    return $this->price;
  }
}