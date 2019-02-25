<?php 

	//水仙花
	function narcissus()
	{
		$n=1;
		$m=500;
		$num=0;
		$bear='';
		for ($i=$n; $i <=$m ; $i++) { 
			if ($i<100) {
				continue;
			}else{
				$bai=floor($i/100);
				$shi=floor(($i%100)/10);
				$ge=$i%10;
				$sum=$bai*$bai*$bai+$shi*$shi*$shi+$ge*$ge*$ge;
				if ($sum==$i) {
					$num++;
					$bear.=$sum.' ';
				}
			}
		}
		return $n."到".$m."之间有".$num."位水仙,分别是:".$bear;
 	}
 	//echo narcissus();
   
    //字符串三次出现
    function search(){
    	$rev='abcdaefgafdf';
    	$ren='';
    	$str=strlen($rev);
    	for ($i=0; $i <= $str ; $i++) { 
    		if($rev[$i]=='a'){
    			$ren.=$rev[$i];
    		}
    	}
    	return $ren;
    }
   // print_r(search());
 
   //回文字符串
    function structure(){
    	$rev='12345654321';
    	$ren='';
    	$str=strlen($rev);
    	for ($i=$str-1; $i >=0 ; $i--) { 
    		$ren.= $rev[$i];
    		if ($ren==$rev) {
    			echo "是回文字符串";
    		}
    	}
    	return $ren;
    }
   // print_r(structure());

   //斐波那契
    function Fibonacci(){
    	$n=10;
    	$arr=[];
    	for ($i=0; $i <10 ; $i++) { 
    		if (count($arr)<2) {
    			$arr[]=1;
    		}else{
    			$arr[]=$arr[$i-1]+$arr[$i-2];
    		}
    	}
    	return $arr;
    }
 //print_r(Fibonacci());

   // 对应英文
    // function opposite(){
    // 	$num=27;
    // 	$list=range('a', 'z');
    // 	$str=strlen($list);
    // 	for ($i=0; $i <$list; $i++) { 
    // 		$jie=$num/$str;
    // 		if ($jie==0){
    // 			$jie--;
    // 			array_unshift(array, var);
    // 		}
    // 	}
    // }

    //阶乘
    function factorial(){
    	$n=5;
    	$sum=5;
    	for ($i=1; $i < 5; $i++) { 
    		$sum*=($n-$i);
    	}
    	return $sum;
    }
   // echo factorial();

//求1个个数
    function qiu(){
    	$n=100;
    	$m=1300;
    	$arr=[];
    	$num=0;
    	for ($i=$n; $i <=$m ; $i++) { 
    		$arr[]=$i;
    	}

       $string=implode('',$arr);
       $strlen=strlen($string);
       //echo $strlen;
       for ($i=0; $i < $strlen; $i++) { 
       		if ($string[$i]=='1') {
       			$num++;
       		}
       }
       return $num++;
    }
   // echo qiu();
  //求丑数
    // function chou(){
    // 	$n=1;
    // 	$m=500;
    // 	for ($i=$n; $i <=$m ; $i++) { 
    		

    // 	}
    // }
    //排数
    function pai(){
    	$arr=[56,48,32,45];
    	$count=count($arr);
    	for ($i=1; $i <= $count; $i++) { 
    		for ($k=0; $k <$count-$i ; $k++) { 
    			if ($arr[$k]>$arr[$k+1]) {
    				$arr[$k]=$arr[$k]^$arr[$k+1];
    				$arr[$k+1]=$arr[$k]^$arr[$k+1];
    				$arr[$k]=$arr[$k]^$arr[$k+1];
    			}
    		}
    	}
    	$str=implode('', $arr);
    	return $str;
    }
    //echo pai();
    //数n
    function shun(){
    	$n=3;
    	$m=5;
    	$arr=range(1, $m);
    	$rev=[];
    	$i=0;
    	$k=0;
    	while (count($arr)>1) {
    		if (!isset($arr[$i])) {
    			$arr=$rev;
    			$rev=[];
    			$i=0;
    		}
    		$k++;
    		if ($k==$n) {
    			unset($arr[$i]);
    			$k=0;
    		}else{
    			$rev[]=$arr[$i];
    		}
    		$i++;

    	}
    	print_r($arr);

    }
   //echo shun();
    //翻转
    function fuanz(){
    	$str=' songjiayan am i';
    	$data=explode(' ', $str);
    	print_r($data);die;
    	$count=count($data);
    	$rev='';
    	for ($i=$count-1; $i >=0 ; $i--) { 
    		$rev.=" ".$data[$i];
    	}
    echo $rev;
    }
    echo fuanz();
  


 ?>