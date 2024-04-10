<?php

$con = mysqli_connect("127.0.0.1:34463", "root", "", "new_feed"); 
if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}
// else{
// 	echo "connection done";
// }

?>