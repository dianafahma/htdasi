<?php 
$firstName ='Lilis Ayumsari';
$score = 10;
$latitude =124.6733324225;
$signedUpForNewsletter =true;
$files = array ('index.php', 'test.php','repost.php');

echo $firstName. '<br/>';
echo gettype($firstName).'<br/>';
echo $score.'<br/>';
echo gettype($score).'<br/>';
echo $latitude.'<br/>';
echo gettype($latitude).'<br/>';
if($signedUpForNewsletter){
	echo 'THis is just the value of true boolean'.'<br/>';
}else{
	echo 'THis is NOT just the value of true boolean'.'<br/>';
}
echo $signedUpForNewsletter.'<br/>';
echo gettype($signedUpForNewsletter).'<br/>';

//arrays
echo $files;

foreach ($files as $file) {
	echo $file.'<br/>';
}
echo gettype($files);
?>