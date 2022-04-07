<?php
class Solution {

    /**
     * @param Integer[][] $events
     * @return Integer
     */
    function maxEvents($events) {
        // print_r($events);
        
        for($i=1; $i<=10000; ++$i){ $days[]=$i;}
        
        $days = array_flip($days);
        $count = 0;
        for($i=0; $i<count($events); $i++){
            
            $arr = array_intersect_key(array_flip($events[$i]), $days);
            // echo "<pre>"; print_r($arr);
           
            if($arr){
                
                unset($days[reset($arr)]);
                $count = ++$count;
            }
                if(empty($events)){
                    break;
                }
            // echo "<pre>"; print_r($events[$i]);
            // echo "<pre>"; print_r($days);
            
        }
            // echo "<pre>"; print_r($count);

        return $count;
    }

    
}

    $events = [[1,4],[4,4],[2,2],[3,4],[1,1]];

    $s = new Solution;
    $s->maxEvents($events);
