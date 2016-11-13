<?php
namespace lib\sort;

class Comb extends SortMethod
{
  public function sort()
  {
    for ($step = $this->_size; $step > 0; $step--) {
      for ($i = 0; $i + $step <= $this->_size; $i++) {
        if ($this->_result[$i] > $this->_result[$i + $step]) {
          $this->change($i, $i + $step);
        }
        $this->_iterationsCount++;
      }
    }
  }

}