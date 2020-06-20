<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 3/23/2020
 * Time: 8:28 PM
 */
/*
function in(){
    for ($i=1;$i<=100;$i++){
        echo "<br>".str_repeat('*',$i);
    }
}
in();*/
/*
function dcm(){
    static $i=0;
    echo "<br>hàm static:".$i;
    $i++;
}
dcm();
dcm();
dcm();
*/
/*
function dequy($n,$i){
    echo "<br>".str_repeat('*',$i);
    if (
        $i>0
    ) {
        $i--;
        dequy($n, $i);
    }
}
//dequy(100,100);
function dequy123($n){
    for ($i=$n;$i>0;$i--){
        echo "<br>".str_repeat('*',$i);
    }
}
//dequy123(100);

function f($n){
    if ($n==0){
        return 0;
    }elseif ($n==1){
        return 1;
    }else{
        return f($n-1)+f($n-2);
    }

}
$p=array();
for ($i=0;$i<15;$i++){
    $f=f($i);
    $p[]=$f;
    echo "<br>tinh F($i):".f($i);
}
//echo "<br>Dãy số fibonaci là:>".implode(",",$p);

$cities=array('hà nội' , 'hồ chí Minh', 'Cần thơ' ,'An Giang'   );
function fi(&$cities_arg){
    foreach ($cities_arg as $key =>$city){
        if (substr($city,0,1)!='h'){
            unset($cities_arg[$key]);
        }
    }
    echo'<br>trong hàm';
    echo '<pre>';
    print_r($cities_arg);
    echo '</pre>';
    return $cities_arg;

}
fi($cities);
echo '<br>ngoài hàm';
echo '<pre>';
print_r($cities);
echo '</pre>';
*/
$danhmuc=array();
$danhmuc[]=array('id'=>1 , 'name'=>'Điện tử' ,'parent_id'=>0,'lavel'=>0);
$danhmuc[]=array('id'=>2 , 'name'=>'Điện lạnh' ,'parent_id'=>0,'lavel'=>0);
$danhmuc[]=array('id'=>3 , 'name'=>'Gia dụng' ,'parent_id'=>0,'lavel'=>0);
$danhmuc[]=array('id'=>4 , 'name'=>'Mẹ và bé' ,'parent_id'=>0,'lavel'=>0);


$danhmuc[]=array('id'=>5 , 'name'=>';lap top' ,'parent_id'=>1,'lavel'=>0);
$danhmuc[]=array('id'=>6 , 'name'=>'Điện thoại' ,'parent_id'=>1,'lavel'=>0);
$danhmuc[]=array('id'=>7 , 'name'=>'Máy tính bảng' ,'parent_id'=>1,'lavel'=>0);
$danhmuc[]=array('id'=>8 , 'name'=>'Tivi' ,'parent_id'=>3,'lavel'=>0);
$danhmuc[]=array('id'=>9 , 'name'=>'tủ lạnh ' ,'parent_id'=>2,'lavel'=>0);
$danhmuc[]=array('id'=>10 , 'name'=>'Điều hòa' ,'parent_id'=>2,'lavel'=>0);
$danhmuc[]=array('id'=>11 , 'name'=>'quạt phun sương' ,'parent_id'=>3,'lavel'=>0);
$danhmuc[]=array('id'=>12 , 'name'=>'Tá bỉm' ,'parent_id'=>4,'lavel'=>0);
$danhmuc[]=array('id'=>13 , 'name'=>'Sữa ' ,'parent_id'=>4,'lavel'=>0);
$danhmuc[]=array('id'=>14 , 'name'=>'máy say sinh tố ' ,'parent_id'=>3,'lavel'=>0);
$danhmuc[]=array('id'=>15 , 'name'=>'cây nước' ,'parent_id'=>3,'lavel'=>0);


$danhmuc[]=array('id'=>16, 'name'=>'Lap top dell' ,'parent_id'=>5,'lavel'=>0);
$danhmuc[]=array('id'=>17 , 'name'=>'lap top sony' ,'parent_id'=>5,'lavel'=>0);
$danhmuc[]=array('id'=>18 , 'name'=>'iphone' ,'parent_id'=>6,'lavel'=>0);
$danhmuc[]=array('id'=>19 , 'name'=>'xiaomi' ,'parent_id'=>6,'lavel'=>0);
$danhmuc[]=array('id'=>20 , 'name'=>'I pad' ,'parent_id'=>7,'lavel'=>0);
$danhmuc[]=array('id'=>21 , 'name'=>'DH Daikin' ,'parent_id'=>10,'lavel'=>0);
$danhmuc[]=array('id'=>22 , 'name'=>'Điều Hòa Gree' ,'parent_id'=>10,'lavel'=>0);
$danhmuc[]=array('id'=>23 , 'name'=>'Tủ lạnh GL' ,'parent_id'=>9,'lavel'=>0);
$danhmuc[]=array('id'=>24 , 'name'=>'Tủ lạnh Samsung' ,'parent_id'=>9,'lavel'=>0);
$danhmuc[]=array('id'=>25 , 'name'=>'Quat PS Saiko' ,'parent_id'=>11,'lavel'=>0);
$danhmuc[]=array('id'=>26 , 'name'=>'máy say sinh tố sunhouse' ,'parent_id'=>14,'lavel'=>0);
$danhmuc[]=array('id'=>27 , 'name'=>'máy say sinh tố kangaro' ,'parent_id'=>14,'lavel'=>0);
foreach ($danhmuc as $item){
    echo '<br>id:'.$item['id'].'-'.$item['name'];
}