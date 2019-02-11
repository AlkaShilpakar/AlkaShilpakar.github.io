function valid(){
	var fname=document.getElementById('Firstname').value;
        var lname=document.getElementById('Lastname').value;
	var pass=document.getElementById('password').value;

	if (fname=="") {
		document.getElementById('msg1').innerHTML="Please enter first name!!";
		document.getElementById('Firstname').select;
		return false;
	}
        else if (lname=="") {
		document.getElementById('msg2').innerHTML="Please enter last name!!";
		document.getElementById('Lastname').select;
		return false;
	}
	else if (pass=="") {
		document.getElementById('msg3').interHTML="Please enter user password!!!";
		document.getElementById('password').select;
		return false;
	}
	
	else{
		return true;
	}
}



