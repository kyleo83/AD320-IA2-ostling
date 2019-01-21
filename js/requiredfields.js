//Verifies that the name and email fields are not blank.

function validateForm(){
    var nametag = document.forms["myForm"]["name"].value;
    var emailtag = document.forms["myForm"]["email"].value;
    if(nametag == "" && emailtag == ""){
        alert("Name and email are required.");
        return false;
    } 
    else if(nametag == ""){
        alert("Name is required.");
        return false;
    } 
    else if(emailtag == ""){
        alert("Email is required.");
        return false;
    }   
}