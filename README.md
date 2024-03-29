一、数组操作的基本函数

数组的键名和值
array_values($arr);  获得数组的值
array_keys($arr);  获得数组的键名
array_flip($arr);  数组中的值与键名互换（如果有重复前面的会被后面的覆盖）
in_array("apple",$arr);  在数组中检索apple
array_search("apple",$arr);  在数组中检索apple ，如果存在返回键名
array_key_exists("apple",$arr);  检索给定的键名是否存在数组中
isset($arr[apple]):   检索给定的键名是否存在数组中

数组的内部指针
current($arr);  返回数组中的当前单元
pos($arr);  返回数组中的当前单元
key($arr);  返回数组中当前单元的键名
prev($arr);  将数组中的内部指针倒回一位
next($arr);  将数组中的内部指针向前移动一位
end($arr);  将数组中的内部指针指向最后一个单元
reset($arr;  将数组中的内部指针指向第一个单元
each($arr);  将返回数组当前元素的一个键名/值的构造数组，并使数组指针向前移动一位
list($key,$value)=each($arr);  获得数组当前元素的键名和值

数组和变量之间的转换
extract($arr);用于把数组中的元素转换成变量导入到当前文件中，键名当作变量名，值作为变量值
注：（第二个参数很重要，可以看手册使用）使用方法 echo $a;
compact(var1,var2,var3);用给定的变量名创建一个数组




二、数组的分段和填充
数组的分段
array_slice($arr,0,3);  可以将数组中的一段取出，此函数忽略键名
array_splice($arr,0,3，array("black","maroon"));  可以将数组中的一段取出，与上个函数不同在于返回的序列从原数组中删除

分割多个数组
array_chunk($arr,3,TRUE);  可以将一个数组分割成多个，TRUE为保留原数组的键名

数组的填充
array_pad($arr,5,'x');  将一个数组填补到制定长度


三、数组与栈
array_push($arr,"apple","pear");  将一个或多个元素压入数组栈的末尾（入栈），返回入栈元素的个数
array_pop($arr);  将数组栈的最后一个元素弹出（出栈）


四、数组与列队
array_shift($arr);数组中的第一个元素移出并作为结果返回（数组长度减1，其他元素向前移动一位，数字键名改为从零技术，文字键名不变）
array_unshift($arr,"a",array(1,2));在数组的开头插入一个或多个元素



五、回调函数
array_walk($arr,'function','words');  使用用户函数对数组中的每个成员进行处理（第三个参数传递给回调函数function）
array_mpa("function",$arr1,$arr2);  可以处理多个数组（当使用两个或更多数组时，他们的长度应该相同）
array_filter($arr,"function");  使用回调函数过滤数组中的每个元素，如果回调函数为TRUE，数组的当前元素会被包含在返回的结果数组中，数组的键名保留不变
array_reduce($arr,"function","*");  转化为单值函数（*为数组的第一个值）



六、数组的排序
通过元素值对数组排序
sort($arr);  由小到大的顺序排序（第二个参数为按什么方式排序）忽略键名的数组排序
rsort($arr);  由大到小的顺序排序（第二个参数为按什么方式排序）忽略键名的数组排序
usort($arr,"function");  使用用户自定义的比较函数对数组中的值进行排序（function中有两个参数，0表示相等，正数表示第一个大于第二个，负数表示第一个小于第二个）忽略键名的数组排序
asort($arr);  由小到大的顺序排序（第二个参数为按什么方式排序）保留键名的数组排序
arsort($arr);  由大到小的顺序排序（第二个参数为按什么方式排序）保留键名的数组排序
uasort($arr,"function");  使用用户自定义的比较函数对数组中的值进行排序（function中有两个参数，0表示相等，正数表示第一个大于第二个，负数表示第一个小于第二个）保留键名的数组排序

通过键名对数组排序
ksort($arr);  按照键名正序排序
krsort($arr);  按照键名逆序排序
uksort($arr,"function");  使用用户自定义的比较函数对数组中的键名进行排序（function中有两个参数，0表示相等，正数表示第一个大于第二个，负数表示第一个小于第二个）

自然排序法排序
natsort($arr);  自然排序（忽略键名）
natcasesort($arr);  自然排序（忽略大小写，忽略键名）




七、数组的计算
数组元素的求和
array_sum($arr);  对数组内部的所有元素做求和运算

数组的合并
array_merge($arr1,$arr2);  合并两个或多个数组（相同的字符串键名，后面的覆盖前面的，相同的数字键名，后面的不会做覆盖操作，而是附加到后面）
“+”$arr1+$arr2;  对于相同的键名只保留后一个
array_merge_recursive($arr1,$arr2);   递归合并操作，如果数组中有相同的字符串键名，这些值将被合并到一个数组中去。如果一个值本身是一个数组，将按照相应的键名把它合并为另一个数组。当数组 具有相同的数组键名时，后一个值将不会覆盖原来的值，而是附加到后面

数组的差集
array_diff($arr1,$arr2);  返回差集结果数组
array_diff_assoc($arr1,$arr2,$arr3);  返回差集结果数组，键名也做比较

数组的交集
array_intersect($arr1,$arr2);  返回交集结果数组
array_intersect_assoc($arr1,$arr2);  返回交集结果数组，键名也做比较



八、其他的数组函数
range(0,12);  创建一个包含指定范围单元的数组
array_unique($arr);  移除数组中重复的值，新的数组中会保留原始的键名
array_reverse($arr,TRUE);  返回一个单元顺序与原数组相反的数组，如果第二个参数为TRUE保留原来的键名
//srand((float)microtime()*10000000);   随机种子触发器
array_rand($arr,2);  从数组中随机取出一个或 多个元素
shuffle($arr);  将数组的顺序打乱