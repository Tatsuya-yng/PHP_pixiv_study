<?php
//3段階以上に分岐させる
//elseif文の書き方を覚える


var_dump("年齢は？");
$age = trim(fgets(STDIN));
if($age < 20){
    var_dump("未成年");
}elseif($age < 65){
    var_dump("成人");
}else{
    var_dump("高齢者");
}
?>