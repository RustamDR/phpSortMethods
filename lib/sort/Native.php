<?php
namespace lib\sort;

class Native extends SortMethod
{
  function sort()
  {
    asort($this->_result, SORT_NUMERIC);
  }
}