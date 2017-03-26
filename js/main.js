// Focuses on title entry

window.onload = function() {
	document.getElementById('noteTitle').focus();
}

// Allow only letters, numbers and spaces

function validate()   {   

      var alphanumeric = /^[A-Za-z0-9\s]+$/;  
      var userEntry = document.getElementById('noteTitle').value;

     	 	if(userEntry.match(alphanumeric))   {    
		      	return true;  
      	
      	}else  {  

      		document.getElementById('error').innerHTML = "Invalid Character";
				    return false;  
      	}  
} 














