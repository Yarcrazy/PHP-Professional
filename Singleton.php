<?php

class Singleton
{
  private static $instance;
  private function __construct() {}
  private function __clone() {}
  private function __wakeup() {}
  public static function getInstance() {
    if (empty(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }
  public static function sayHello() {
    var_dump(self::$instance);
  }
}

Singleton::getInstance();
Singleton::sayHello();
