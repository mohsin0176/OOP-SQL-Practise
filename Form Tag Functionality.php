
<? php

1.In The Form tag when u press the submit button
2.that call the action="index.php"
3.In the <form></form> tags,The  $_GET and $_POST are array used as method
4.This array takes data from <form></form> tags input field
5.This array represent data by key=>value format
6.This array send data to the php page
7.This php page takes input from the <form></form> tags input field by array
8.In the php page $_GET and $_POST are array that process data in the php page

echo $_POST;// print the whole array in key=>value format
echo $_POST("username");// print from the array only the value of the key .
//username is the name of input field of <form></form> Tags.

?>



