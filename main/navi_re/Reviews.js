function formvalid() {
	
	var Name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var textArea = document.getElementById('textArea').value;

	if (name == "" || email == "" || textArea == "") 
        alert("Incomplete Details");
    return false;
    else{
    	alert("Succesfully submitted");
    	return true;
    }
    
};