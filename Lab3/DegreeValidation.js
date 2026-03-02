function checkDegree(){

    let d = document.getElementsByName("degree");

    if(!d[0].checked && !d[1].checked && !d[2].checked){
        alert("Select degree");
        return false;
    }

    return true;
}
