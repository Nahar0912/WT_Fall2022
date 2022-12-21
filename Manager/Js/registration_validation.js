function checkName() {
    var name = document.getElementById("name").value;
    var nameformat = /^[a-zA-Z ]*$/;
    if (name=="") {
        document.getElementById("name-Error").innerHTML = "Please enter username";
        return true;
    }
    else if(name.match(nameformat)) {
        return false;
    }
    else {
        document.getElementById("name-Error").innerHTML = "Only letters and white space allowed";
        return true;
    }
}


function checkEmail() {
    //-----email-----
    var email = document.getElementById("email").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email==""){
        document.getElementById("email-Error").innerHTML="Enter email";
        return true;
    }  
    else if(email.match(mailformat)) {
        return false;
    }
    else {
        document.getElementById("email-Error").innerHTML = "Please enter @ and .com";
        return true;
    }
      
}


function checkNewPassword() {
    var newpassword = document.getElementById("newpassword").value;
    if (newpassword == "") {
        document.getElementById("npass-Error").innerHTML="Please enter password";
        return true;
    }
    else if (newpassword.length < 5) {
        document.getElementById("npass-Error").innerHTML = "Password must contain at least 5 characters";
        return true;
    }
}


function checkPassword() {
    var password = document.getElementById("password").value;
    if (password == "") {
        document.getElementById("pass-Error").innerHTML = "Please enter password";
        return true;
    }
    /*else if (password == document.getElementById("newpassword").value) {
        document.getElementById("pass-Error").innerHTML = "Invalid password";
        return true;
    }*/
}


function checkPhone() {

    var phone = document.getElementById("phone").value;
    if ( phone == "" ) {
        document.getElementById("phone-Error").innerHTML = "Please enter phone number";
        return true;
    }
}


function checkNID() {

    var NID = document.getElementById("NID").value;
    if ( NID == "") {
        document.getElementById("nid-Error").innerHTML = "Please enter NID";
        return true;
    }
}   

    
function checkGender() {
    //----gender-----
    if (document.getElementById("gender-male").checked == true ||  document.getElementById("gender-female").checked == true)
    {
        return false;
    }
    else{
        document.getElementById("gender-Error").innerHTML = "Please select any radio button";
        return true;
    }
}


function checkBranch() {

    if (document.getElementById("Dhaka").checked == true ||  document.getElementById("Chittagong").checked == true || document.getElementById("Rajshahi").checked == true)
    {
        //document.getElementById("branch-Error").innerHTML = "Please select any radio button";
        return true;
    }
    else{
        document.getElementById("branch-Error").innerHTML = "Please select any radio button";
        return true;
    }
} 


function checkFile() {
    var filepload = document.getElementById("fileToUpload").value;
    if ( filepload == "" ) {
        document.getElementById("file-Error").innerHTML="Please enter File";
        return true;
    }
} 


function checkImage() {
    var imageUpload = document.getElementById("imageToUpload").value;
    if ( imageUpload == "") {
        document.getElementById("image-Error").innerHTML="Please enter image";
        return true;
    }
} 


function checkAddress() {
    var address = document.getElementById("address").value;
    if ( address == "") {
        document.getElementById("address-Error").innerHTML="Please enter address";
        return true;
    }
} 


function checkForm() {
    if (checkName()==true || checkEmail()==true|| checkNewPassword()==true||checkPassword()==true || checkPhone()==true || checkNID()==true ||checkGender()==true||checkFile()==true||checkImage()==true) {
        return false;
    }
}

function loadAjex() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
    }
	else
	{
		document.getElementById("demo").innerHTML = this.status;
	}
    };
    xhttp.open("POST", "../view/ajex.txt", true);
    xhttp.send();
}

$(document).ready(function () {
    $("#hide").click(function () {
        $("#p1").hide();
    });
    $("#show").click(function () {
        $("#p1").show();
    });
});
  