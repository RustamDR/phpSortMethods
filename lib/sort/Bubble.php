<?php
namespace lib\sort;

class Bubble extends SortMethod
{
  public function sort()
  {
    $to = 0;

    for ($i = 0; $i <= $this->_size; $i++) {
      $changed = false;
      for ($j = $this->_size; $j > $i; $j--) {
        if ($this->_result[$j - 1] > $this->_result[$j]) {
          $changed = $this->change($j, $j - 1);
          $to = $j - 1;
        }
        $this->_iterationsCount++;
      }

      if (!$changed) {
        break;
      }

      $i = $to > $i ? $to : $i;
    }
  }
}