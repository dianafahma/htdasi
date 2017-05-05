<?php
session_start();

echo displayForm();

function displayForm() {
	$r ='';
	//build it
	$r .='<form method="post" action="processOrderTickets.php">';
	$r .= displayNiceFormBegin();
	$r .= displayMessage();
	$r .=  displayRow('First Name: ','<input type="text" name="firstName" value="'. $_SESSION['firstName'].'"/>', 'firstName');
	$r .= displayRow('Last Name: ','<input type="text" name="lastName" value="'. $_SESSION['lastName'].'"/>', 'lastName');
	$r .= displayRow('Number Of Tickets: ','<input type="text" name="numberOfTickets" value="'.$_SESSION['numberOfTickets'].'"/>','numberOfTickets');
	$r .= displayRow('firstName: ',getSmoking());
	$r .= displayRow('Your interests: ', getInterest(),'interests');
	$r .= displayRow('Payments: ', getPayments(),'payments');
	$r .= displayRow('','<input type="checkbox" name="acceptedConditions" value="yes"/><span style="font-size: 8pt">I accept the conditions.</span>');
	//button
	$r .= displayRow('','<input type="submit" value="Order Tickets"/>');
	$r .= displayNiceFormEnd();
	$r .='</form>';
	return $r ;
	//hidden variables

}

function displayNiceFormBegin(){
	$r = '';
	return $r ;
}
function displayNiceFormEnd(){
	$r = '';
	return $r ;
}
function displayRow($left,$right, $variableName =''){
	$r = '';
	//check validation message
	if(strlen(time($variableName))){
		$sessionVariabelName = $variableName.'message';
		$validationMessage ='<div style="font-size:8pt; color:red;">'.$_SESSION[$sessionVariabelName].'</div>';
		$_SESSION['$sessionVariabelName']='';
	}
	//build id

	return $r ;
}
function displayMessage(){
	$r = '';
	return $r ;
}
function getInterest(){
	$r = '';
	//variables
	$choices = array('classic'=> 'Classic','jazz'=> 'Jazz','pop'=>'POP');
	$interests = $_SESSION['interests'];

	$r .='<select name="interests"';
//build it
	if(count($choices)>0){
		foreach ($choices as $key => $value) {


			//find out it is selected
			if(in_array($key, $interests)){
				$selectedAttribute = 'selected="selected"';
			}else {
				$selectedAttribute = '';
			}
			//build line
	//		$r .='<option value=""'.$key.'""''>Classic </option>';
		}
	}
	/*$r .='<option value="classic">Classic </option>';
	$r .='<option value="jazz">Jazz </option>';
	$r .='<option value="pop">POP</option>';*/
	$r .='</select>';
	return $r ;
}
function getPayments(){
	$r = '';
	$r .='<select name="payments"';
	$r .='<option value="creditCard">Credit Card </option>';
	$r .='<option value="debitCard">Debit Card </option>';
	$r .='<option value="cash">Cash</option>';
	$r .='</select>';
	return $r ;
}
function getSmoking() {
	$r ='';
	//variables
	$smokingStatus = $_SESSION['smokingStatus'];
	//define check attribute
	if($smokingStatus == 'smoking'){
		$nonsmokingAttribute='';
		$smokingAttribute = 'checked="checked"';
	}else {
		$nonsmokingAttribute = 'checked="checked"';
		$smokingAttribute='';
	}
	//build it
	$r .='<input type="radio" name="smokingStatus" value="nonsmoking" ' . $nonsmokingAttribute.'/>non-smoking<br/>';
	$r .='<input type="radio" name="smokingStatus" value="smoking" '. $smokingAttribute.'/>smoking';
	return $r;
}

function getAcceptedConditions(){
	$r = '';
	//variabels

}
?>