<?php

 function maxkey($arr){
 2 
 3     $maxval = max($arr);
 4     foreach($arr as $key=>$val){
 5     
 6         if($maxval == $val){
 7         
 8             $maxkey = $key;
 9         }
10     }
11     return $maxkey;
12 }
13 
14 $arr = array(0,-1,-2,5,"b"=>15,3);
15 echo maxkey($arr);