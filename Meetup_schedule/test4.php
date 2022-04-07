<?php
   


   function _array_intersect_key($arr, $keys)
  {

      $res = array();
      foreach (array_keys($arr) as $key)
      {
        if (isset($keys[$key]))
        {
          $res[$key] = $arr[$key];
        }
      }
      return $res[$key];
    
  }

  $set = [
  	[1=>1,2=>3],[3=>3,4=>3],[5=>5,6=>5]
  ];


  $day = [1,4,3];


  $r = _array_intersect_key($set[1], array_flip($day));

  echo "<pre>"; print_r($r);