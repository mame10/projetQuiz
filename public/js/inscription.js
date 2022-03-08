const nom = document.getElementById('username');
const prn = document.getElementById('second_name');
const login = document.getElementById('email');
const pwd = document.getElementById('pass1');
const cpwd = document.getElementById('pass2');
const btn = document.getElementById('btn');

//validation prenom et nom
var letters = /^[A-Za-z]+$/;




//fonction validation mail
function validateEmail(email) {
  const res = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return res.test(String(email).toLowerCase());
}

function checkLength(input, min) {
  if (input.value == '' || input.value.length < min) {
    return true;
  }
}
//fonction validation password  
function CheckPassword(inputtxt) {
  var paswd = /^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{6,40}$/;
  if (paswd.test(inputtxt.value)) {
    return true;
  }
}



prn.addEventListener('input', () => {
  if ((!letters.test(prn.value)) || checkLength(prn, 2)) {
    prn.style.border = " 4px solid red";
  } else {
    prn.style.border = " 4px solid green";
  }

  nom.addEventListener('input', () => {
    if ((!letters.test(nom.value)) || checkLength(nom, 2)) {
      nom.style.border = " 4px solid red";
    } else {
      nom.style.border = " 4px solid green";
    }
  })
  login.addEventListener('input', () => {
    if (validateEmail(login.value)) {
      login.style.border = '4px solid green';
    } else {
      login.style.border = '4px solid red';
    }
  });
  pwd.addEventListener('input', () => {
    if (CheckPassword(pwd)) {
      pwd.style.border = '4px solid green';
    }
    else pwd.style.border = '4px solid red';
  })

  cpwd.addEventListener('input', () => {
    if (pwd.value === cpwd.value) {
      cpwd.style.border = '4px solid green';
    } else {
      cpwd.style.border = '4px solid red';
    }
  });
})











