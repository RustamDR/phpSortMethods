<?php
namespace lib\sort;

class Choice extends SortMethod
{
  public function sort()
  {
    for ($i = 0; $i <= $this->_size; $i++) {
      $changed = false;
      for ($j = $i + 1; $j <= $this->_size; $j++) {
        if ($this->_result[$j] < $this->_result[$i]) {
          $changed = $this->change($i, $j);
        }
        $this->_iterationsCount++;
      }
      if (!$changed) {
        break;
      }
    }

    return $this;
  }
}