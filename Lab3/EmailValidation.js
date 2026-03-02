function checkEmail(){

    let e = document.getElementById("email").value;

    if(e==""){
        alert("Email cannot be empty");
        return false;
    }

    if(e.indexOf("@")==-1 || e.indexOf(".")==-1){
        alert("Invalid email");
        return false;
    }

    return true;
}