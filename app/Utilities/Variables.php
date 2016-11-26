<?php

namespace App\Utilities;

class Utilities {

  public static function get_user_role() {
    if(Auth::check())
      return Auth::user()->userRole->name;
    else
      return '';
  }
  
}

?>