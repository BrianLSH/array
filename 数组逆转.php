<?php
//    数组逆序( 不能使用rsort函数，不能生成新数组 )


//使用array_reverse()函数会创建新的数组，所以不能使用。

    $arr = array("a","b","c",1,10);
    $i = "";//要替换位置的数的下标
    $j = "";//临时变量
    $k = "";//被替换位置的数的下标

$len = count($arr);
$half_len = floor($arr);
for ($i=0; $i <$half_len ; $i++) {

  $j = $arr[$i];



}


    // $len = count($arr);
    //
    // $half_len = floor($len/2);
    //
    // for ($i = 0; $i<$half_len; $i++) {
    //
    //     $j = $arr[$i];
    //
    //     if ($len%2!=0) {  //是len的长度不是half_len的长度
    //
    //         $k = $half_len*2-$i;
    //
    //     }else{
    //
    //         $k = $half_len*2-$i-1;
    //     }
    //
    //
    //
    //         $arr[$i] = $arr[$k];
    //         $arr[$k] = $j;
    // }
    //
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";




   /*
    * 注意奇偶数的情况下 第一个与最后一个数的下标关系  $i 与 $k 的关系
    *
    *
    *奇数时  $k = $len*2 - $i
    *
    * 偶数时  $k = $len*2 -$i -1
    *
    *
    * */
