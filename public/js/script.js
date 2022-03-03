

function isEmailValid(email) {
    const emailRegexp = new RegExp(
      /^[a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-zA-Z0-9]@[a-zA-Z0-9][-\.]{0,1}([a-zA-Z][-\.]{0,1})*[a-zA-Z0-9]\.[a-zA-Z0-9]{1,}([\.\-]{0,1}[a-zA-Z]){0,}[a-zA-Z0-9]{0,}$/i  
    )
  
    return emailRegexp.test(email);
   
  }
 

  function validatePassword() {
    
    var newPassword = document.getElementById('form').newPassword.value;
    var minNumberofChars = 6;
    var maxNumberofChars = 20;
    
    var regularExpression  = /^[a-zA-Z0-9!@#$%^&*]{6,20}$/;
    if(newPassword.length < minNumberofChars || newPassword.length > maxNumberofChars){
        return false;
    }
    if(!regularExpression.test(newPassword)) {
        alert("password should contain atleast one number and one special character");
        return false;
    }
}

const mail=document.getElementById('email');
mail.addEventListener('change',function(e){
  isEmailValid(e.target.value);
 
});

const pwd=document.getElementById('password');
pwd.addEventListener('change',function(event){
  validatePassword(event.target.value);
})



