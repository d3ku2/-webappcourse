<?php
$arr = ["html", "css", "php", "js", "jq"]
$res = " ";
foreach($arr as $l){
    $res .="$l".',';
}
echo substr($res,0 ,-1);