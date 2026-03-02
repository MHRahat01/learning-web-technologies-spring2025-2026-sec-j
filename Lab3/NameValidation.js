function checkName(){

    let n = document.getElementById("name").value;

    if(n==""){
        alert("Name cannot be empty");
        return false;
    }

    if(n.indexOf(" ")==-1){
        alert("Enter at least two words");
        return false;
    }

    let fn = n[0];

    if(fn>='0' && fn<='9'){
        alert("Must start with a letter");
        return false;
    }

    return true;
}