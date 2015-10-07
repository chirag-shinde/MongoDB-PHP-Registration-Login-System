function chk(){
    
   // alert("1");
var pass = document.getElementById("pass").value;
var cpass = document.getElementById("cpass").value;

    if(pass!=cpass){
      document.getElementById("error").innerHTML = "Passwords do not match!";
        document.getElementById("cpass").value = "";
    }
    else{
        document.getElementById("error").innerHTML = "Passwords match!";
    }
}