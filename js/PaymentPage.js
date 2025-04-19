


function nameCheck(){

    var letters=/^[A-za-z\s]+$/;
    var idname=document.getElementById("idname").value.trim();
    

    if(!idname){

        document.getElementById("error-name").innerHTML="This field can not be empty";
        return false;

    }else if(!idname.match(letters)){

       
        document.getElementById("error-name").innerHTML="No Number or symbols Allowed";
        return false;
    }else{
        document.getElementById("error-name").innerHTML=" ";
        return true;
    }
}

function cardCheck(){

    var numbers=/^[0-9]+$/;
    var cnum = document.getElementById("card-number").value.trim();
  

    if(!cnum){
        document.getElementById("error-card").innerHTML="This field can not be empty";
        return false;

    }else if(!cnum.match(numbers)){
        document.getElementById("error-card").innerHTML="Only Numbers allowed";
        return false;
    }else{
        document.getElementById("error-card").innerHTML=" ";
        return true;
    }
}

function dateCheck(){

    var numbers1=/^(0[1-9]|1[0-2])\/([0-9]{2})$/;
    var cnum = document.getElementById("exdate").value.trim();
    

    if (!cnum){

        document.getElementById("ex-error").innerHTML="Enter date";
        return false;

    }else if(!cnum.match(numbers1)){

        document.getElementById("ex-error").innerHTML="Enter in MM/YY Format";
        return false;

    }else{

        document.getElementById("ex-error").innerHTML=" ";
        return true;

    }


}
function cvvCheck(){

    var numbers=/^[0-9]+$/;
    var cnum = document.getElementById("cvvnum").value.trim();
  

    if(!cnum){
        document.getElementById("cvv-error").innerHTML="Enter CVV";
        return false;

    }else if(!cnum.match(numbers)){
        document.getElementById("cvv-error").innerHTML="Only Numbers allowed";
        return false;
    }else{
        document.getElementById("cvv-error").innerHTML=" ";
        return true;
    }
}


function validateForm(){

    const username = nameCheck();
    const cardnumber = cardCheck()
    const expdate = dateCheck();
    const cvvnumber = cvvCheck();

    if(username && cardnumber && expdate && cvvnumber) {
        document.forms[0].action = "./PaymentSuccesPage.html";
        return true;
    }
        
    else{
        return false;
    }
}
