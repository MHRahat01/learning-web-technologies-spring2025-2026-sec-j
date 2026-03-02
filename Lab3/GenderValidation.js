function checkGender(){

    let g = document.getElementsByName("gender");

    if(!g[0].checked && !g[1].checked && !g[2].checked){
        alert("Select gender");
        return false;
    }

    return true;
}