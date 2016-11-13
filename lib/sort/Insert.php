<?php
namespace lib\sort;

class Insert extends SortMethod
{
  public function sort($step = 1)
  {
    for ($i = $step; $i <= $this->_size; $i += $step) {
      $x = $this->_result[$i];
      $this->_result[$i] = null;

      $insertPos = $i;

      for ($j = $i - $step; $j >= 0 && $this->_result[$j] > $x; $j -= $step) {
        $this->_result[$insertPos] = $this->_result[$j];
        $insertPos -= $step;
        $this->_iterationsCount++;
      }

      $this->_result[$insertPos] = $x;
    }
  }
}