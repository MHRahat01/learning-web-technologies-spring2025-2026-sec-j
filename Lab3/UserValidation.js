function checkUser(){

    let id = document.getElementById("userid").value;
    let pic = document.getElementById("picture").value;

    if(id=="" || id<=0){
        alert("Enter valid UserID");
        return false;
    }

    if(pic==""){
        alert("Select picture");
        return false;
    }

    return true;
}