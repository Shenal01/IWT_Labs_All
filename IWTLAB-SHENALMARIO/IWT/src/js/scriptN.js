document.write("connected to register script");
function checkPassword() {

  if (document.getElementById("pwd").value != document.getElementById("cnfrmpwd").value) {
    alert("Password Mismatch!!!");
    return false;
  } else {
    alert("Success :)");
    return true;
  }
}

function enableCheckBox() {
  
  if(document.getElementById("checkBox").checked) {
	  document.getElementById("submitBtn").disabled=false;
  }
  else{
	  document.getElementById("submitBtn").disabled=true;
  }
  
}
