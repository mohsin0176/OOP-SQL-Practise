<? php

<a href="action.php?id=1&name=mohsin&roll=102">Delete</a>

1.Press Delete button that calls the action.php page.
2.Send the value of the variable to action.php page.
3.action.php page takes the data by $_GET method which is an array.

echo $_GET;// print the whole array in key=>value format
echo $_GET("id");// print from the array only the value of the key .
//id is the variable that hold value  from delete button of <form></form> Tags.
echo $_GET("name");
echo $_GET("roll");
?>

