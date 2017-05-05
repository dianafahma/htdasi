<?php

session_start();
/*echo 
$_SESSION['name'][1];echo '<br/>
';
//echo 
$_SESSION['name'][2];echo '<br/>
';
echo 
$_SESSION['name'][3];echo '<br/>
';
*/
$i=1;
while ($i<=3){
echo 
$_SESSION['name'][$i];echo '<br/>
';
$i=$i+1;
}
//echo $user;
?>