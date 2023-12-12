<?php 

$vars=getenv(); 
foreach($vars as $k=>$v)
{  
    if (strpos($k,'vault')!== false)
        echo sprintf('%s = %s <br/>',$k,$v);
} 
