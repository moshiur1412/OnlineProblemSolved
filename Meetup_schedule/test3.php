<?php
   function array_merge_on_key($key, $array1, $array2) {
      $arrays = array_slice(func_get_args(), 1);
      $r = array();
      foreach($arrays as &$a) {
         if(array_key_exists($key, $a)) {
            $r[] = $a[$key];
            continue;
         }
      }
      return $r;
   }
   // example:
   $array1 = array("id" => 12, "name" => "Karl");
   $array2 = array("id" => 4, "name" => "Franz");
   $array3 = array("id" => 9, "name" => "Helmut");
   $array4 = array("id" => 10, "name" => "Kurt");

   $result = array_merge_on_key("id", $array1, $array2, $array3, $array4);

   echo implode(",", $result); // => 12,4,9,10
?>