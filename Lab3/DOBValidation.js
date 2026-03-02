function checkDOB(){

    let d = document.getElementById("dd").value;
    let m = document.getElementById("mm").value;
    let y = document.getElementById("yyyy").value;

    if(d=="" || m=="" || y==""){
        alert("Enter DOB");
        return false;
    }

    if(d<1 || d>31 || m<1 || m>12 || y<1900 || y>2016){
        alert("Invalid date");
        return false;
    }

    return true;
}