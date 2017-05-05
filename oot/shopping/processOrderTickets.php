<?php
session_start();

$firstName = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING);
$numberOfTickets = filter_input(INPUT_POST,'numberOfTickets',FILTER_VALIDATE_INT);
$smokingStatus = filter_input(INPUT_POST,'smokingStatus',FILTER_SANITIZE_STRING);


//handle multiple input string
$rawInterest = $_POST['interests'];
$interests = $array();
if(count($rawInterest)>0){
	foreach ($rawInterests as $rawInterest ) {
		$interests[]= htmlspecialchars($rawInterest);
	}
}


//maintain session
$_SESSION['status']='succeeded';
$_SESSION['firstName']=$firstName;
$_SESSION['lastName']=$lastName;
$_SESSION['numberOfTickets']=$numberOfTickets;
$_SESSION['smokingStatus']=$smokingStatus;
$_SESSION['interests']=$interests;


//validate first name
if(strlen($firstName)==0){
	$_SESSION['status']='failed';
	$_SESSION['firstNameMessage']='Please fill your first name';
}
//validate last name
if(strlen($lastName)==0){
	$_SESSION['status']='failed';
	$_SESSION['lastNameMessage']='Please fill your last name';
}
//validate number of tickets
if(strlen($numberOfTickets ===false || strlen(trim(numberOfTickets))==0){
	$_SESSION['status']='failed';
	$_SESSION['numberOfTickets']='Please enter the number of tickets';
}
//build message
if($_SESSION['status']=='failed'){
	$_SESSION['message']='Please make correction on the form';
}else {
	$_SESSION['message']='Thank you '.$firstName.' '.$lastName.'for your order of'.$numberOfTickets.' tickets.';
	//erase all variabels
	$_SESSION['firstName']='';
	$_SESSION['lastName']='';
	$_SESSION['numberOfTickets']='';
	$_SESSION['smokingStatus']='';
	$_SESSION['interests']='';
}
//go back to form
$callingPane =$_SERVER['HTTP_REFERER'];
header('Location: '.$callingPane);
?>