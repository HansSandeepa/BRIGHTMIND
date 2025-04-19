function func(){
    var user=document.getElementById('username').value;
    var pass=document.getElementById('password').value;
    
    if(user=='ABCD' && pass=='1234'){
      alert("Succesful login !");
      //window.location.assign("login.html");
   

     }else{
       alert("Worng entry invalid");
      
   }
 }