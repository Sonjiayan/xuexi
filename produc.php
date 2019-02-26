<?php 
//数到m删除 求剩下的数字
 	function brand($n=3,$m=6){
 		$arr[]=range(1, $m);
 		$num=[];
 		$i=0;
 		$k=0;
 		$count=count($arr);
 		while(count($arr)>1) {
 			if (!isset($arr[$i])) {
 				$arr=$num;
 				$num=[];
 				$i=0;
 			}
 			$k++;
 			if($k==$n) {
 				unset($arr[$i]);
 				$k=0;
 			}else{
 				$num[]=$arr[$i];
 			}
 			$i++;
 		}
 	}
 	//echo brand();
 	//求三组接近值
 	function  sum3(){
 		$arr=[9,8,7,6,5,4,3,2,1];
 		$count=count($arr);
 		$sum=0;
 		$m=0;
 		for ($i=0; $i <$count ; $i++) { 
 			$sum += $arr[$i];
 		}
 		$num=$sum/3;
 		$m=$count/3;
 		for ($i=0; $i <$count ; $i++) { 
 			$k+=$arr[$i];
 			if ($k==$num) {
 				echo $num;
 			}
 		}
 		return $num;
 	}
 	//echo sum3();
 	//求最大值
 	function max1(){
 		$arr=[56,78,62,31,96,45];
 		$count=count($arr);
 		$rev='';
 		for ($i=1; $i <=$count ; $i++) { 
 			for ($k=0; $k <$count-$i ; $k++) { 
 				if ($arr[$k]<$arr[$k+1]) {
 					$arr[$k]=$arr[$k]^$arr[$k+1];
 					$arr[$k+1]=$arr[$k]^$arr[$k+1];
 					$arr[$k]=$arr[$k]^$arr[$k+1];
 				}
 			}
 		}
 		for ($i=0; $i <$count; $i++) { 
 			$rev.=$arr[$i];
 		}
 		return $rev;
 	}
 	//echo max1();
 	//银行柜台
 	function ctime(){
 		$active_time =  [9.01, 9.10, 9.20, 9.21, 9.22];
	    $process_time = [0.30, 0.18, 0.22, 0.47, 0.11];
	    $arr=[];
	    if (count($arr)<4) {
	    	$arr=$active_time[9.01,9.10,9.20,9.21];
	    	$loadtime=$active_time+$process_time;
	    }
	    oldtime=$process_time-$loadtime;
	    $count=count($active_time);
	   $pepon=$count/$old;
	   echo $pepon;
 	}
 	//echo ctime();
 	
 	









 ?>