<?php

namespace Drupal\custom_services;

class EmailForm {
  public function Drupal($name = ''){
    if (empty($name)) {
     return "Drupal Services";
   }
   else {
     return "Hello " . $name . "!";
   }
 }

}
