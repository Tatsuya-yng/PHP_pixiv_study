<?php
//幼児と高齢者だけを対象にする
//　｜｜　またはという意味

var_dump("年齢は？");
$age = trim(fgets(STDIN));
if($age <= 5 || $age >= 65){
    var_dump("幼児と高齢者");
}
?>