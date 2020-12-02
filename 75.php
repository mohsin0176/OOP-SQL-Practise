<? php
function convert($info)
{
return str_replace("website", "www.geekyshows.com",$info);
}
$info="You Can Visit Our Website and learn php";
$var=filter_var($info,FILTER_CALLBACK,array("options"=>"convert"));
echo "RESULT:".$var."<br>";
?>

filter_var($email,FILTER_CALLBACK,('options'=>'strtoupper'));
filter_var($email,FILTER_CALLBACK,('options'=>'myfunction'));