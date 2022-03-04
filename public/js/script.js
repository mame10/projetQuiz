

function validateEmail(email) {
  const res = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return res.test(String(email).toLowerCase());
}
 

//   function validatePassword() {
    
//     var newPassword = document.getElementById('password').newPassword.value;
//     var minNumberofChars = 6;
//     var maxNumberofChars = 40;
    
//     var regularExpression  = /^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{6,40}$/;
//     if(newPassword.length < minNumberofChars || newPassword.length > maxNumberofChars){
//         return false;
//     }
//     if(!regularExpression.test(newPassword)) {
//         alert("password should contain atleast one number and one special character");
//         return false;
//     }
// }

function CheckPassword(inputtxt)  { 
var paswd=  /^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{6,40}$/;
if(paswd.test(inputtxt.value)) { 
  return true;
  }
}  

const mail=document.getElementById('email');

mail.addEventListener('input',() =>{
  if(validateEmail(mail.value)) {

    mail.style.border= '4px solid green';
  }else{
    mail.style.border='4px solid red';
  }
});

const pwd=document.getElementById('password');
pwd.addEventListener('input',()=>{
  if(CheckPassword(pwd)){
    pwd.style.border= '4px solid green';
  }else{
    pwd.style.border='4px solid red';
  }
})



