<?php
namespace lib\sort;

use lib\sort\interfaces\ISortMethod;

abstract class SortMethod implements ISortMethod
{
  protected $_in = [];
  protected $_result = [];
  protected $_iterationsCount = 0;
  protected $_time = 0;
  protected $_size = 0;
  private $_buffer = null;

  /**
   * @param $i
   * @param $j
   * @return bool
   */
  protected function change($i, $j)
  {
    $this->_buffer = $this->_result[$i];
    $this->_result[$i] = $this->_result[$j];
    $this->_result[$j] = $this->_buffer;

    return true;
  }

  /**
   * @param array $arrayToSort
   * @return static
   */
  public static function create($arrayToSort = [])
  {
    $method = new static();
    $method->_in = $arrayToSort;
    $method->_result = $method->_in;
    $method->_size = count($method->_in) - 1;

    return $method;
  }

  /**
   * @return $this
   */
  public function run()
  {
    $this->_iterationsCount = 0;

    if (!$this->_result) {
      return $this;
    }

    $this->_time = microtime(true);
    $this->sort();
    $this->_time = microtime(true) - $this->_time;

    return $this;
  }

  public function getSortedArray()
  {
    return $this->_result;
  }

  public function getTime()
  {
    return $this->_time;
  }

  public function getIterationsCount()
  {
    return $this->_iterationsCount;
  }
}