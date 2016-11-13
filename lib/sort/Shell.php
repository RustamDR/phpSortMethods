<?php
namespace lib\sort;

class Shell extends Insert
{

  public function sort()
  {
    $d = [5, 3, 1];
    foreach ($d as $step) {
      parent::sort($step);
    }
  }

}