<?php
namespace lib\sort;

class Shaker extends SortMethod
{
  public function sort()
  {
    $top = 0;
    $bottom = $this->_size;
    $k = 0;

    while ($top < $bottom) {

      for ($i = $top; $i < $bottom; $i++) {
        if ($this->_result[$i] > $this->_result[$i + 1]) {
          $this->change($i, $i + 1);
          $k = $i;
        }

        $this->_iterationsCount++;
      }

      $bottom = $k;

      for ($i = $bottom; $i > $top; $i--) {
        if ($this->_result[$i - 1] > $this->_result[$i]) {
          $this->change($i, $i - 1);
          $k = $i;
        }
        $this->_iterationsCount++;
      }

      $top = $k;
    }
  }
}