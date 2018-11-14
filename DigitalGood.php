<?php

class DigitalGood extends Good_Abstract
{
  public function getFinalPrice() {
    return round($this->price / 2, 2);
  }
}