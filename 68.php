<?php

//setcookie(name,value,expire,path,domain,secure,httponly);

setcookie("username","geeky",time()+60*60*24*10); //10 days
setcookie("username","geeky",time()-60*60*24*10); //10 days delete cookie

?>