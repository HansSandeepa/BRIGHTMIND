function func(e){
  
  e.preventDefault(); // Prevent form submission
    var user=document.getElementById('username').value;
    var pass=document.getElementById('password').value;
    
    if(user=='ABCD' && pass=='1234'){
      alert("Succesful login !");
      window.location.href="./Dashboard.html";
   

     }else{
       alert("Worng entry invalid");
      
   }
 }