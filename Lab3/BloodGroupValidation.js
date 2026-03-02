function checkBloodGroup(){

    var b = document.getElementById("blood").value;

    if(b==""){
        alert("Select blood group");
        return false;
    }

    return true;
}