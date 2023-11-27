
//--------------------[-validationsign up]--------------------
// let email = document.getElementById('email');
// let password = document.getElementById('password');
// let password2 = document.getElementById('password2');
// let error1 = document.getElementById('error1');
// let error2 = document.getElementById('error2');
// let error3 = document.getElementById('error3');

// let form = document.getElementById('form');
// // let inputControl = document.querySelector('.input-control');
// let emailRegex = /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;
// let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

// form.addEventListener('submit', (e) =>{
//     e.preventDefault();
//     validateInputs();
// });
   
//    const setError = (element,message) => {
//         element.innerText= message
//         element.classList.add('error');
//         element.classList.remove('success');
//    };

//    const setSuccess = (element,message) => {

//     element.innerText= message
//     element.classList.add('success');
//     element.classList.remove('error');

//     };
//    const validateInputs =() => {
//        const emailvalue = email.value.trim();
//        const passwordvalue = password.value.trim();
//        const password2value = password2.value.trim();

// if (emailvalue =='' || !emailRegex.test(emailvalue)){
//     setError(error1,'invalid email');


// }else{
//     setSuccess(error1, "Valid");
// }


// if (passwordvalue === '' ){
//     setError(error2, 'invalid password');

// }
// else if (passwordvalue.lenght <8) {
//     setError(error2,'password must be at least 8 character');

// }                                                                                                                       
// else{
//     setSuccess(error2, "Valid");

// }
// if (password2value === ''){
//     setError(error3,'please confirme your password');

// }
// else if (password2value !== passwordvalue) {
//     setError(error3,"password doesn't match");


// }else{

//     setSuccess(error3,'Valid');
// }

//    }

const username = document.getElementById("username");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");
const inscription = document.getElementById("inscription");

console.log(inscription) ;

let valid = true;
inscription.addEventListener("submit", (e) => {
    
  validateInputs();
  if (valid == false) {
    e.preventDefault();
  }
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".alert");

  errorDisplay.innerText = message;
  errorDisplay.classList.remove("d-none");
  errorDisplay.classList.add("alert-danger");
  valid = false;
};
const setSuccess = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".alert");

  errorDisplay.innerText = message;
  errorDisplay.classList.remove("d-none");
  errorDisplay.classList.add("alert-success");
  errorDisplay.classList.remove("alert-danger");
  valid = true;
};

const validateInputs = () => {
  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();

  if (usernameValue === "") {
      console.log("username est unvalid");
    setError(username, "Username est vide");
  } else {
    console.log(`username est valid`);
    setSuccess(username, "Username est valid");
  }


  if (passwordValue === "") {
    setError(password, "Password est vide");
  } else if (passwordValue.length < 8) {
    console.log(`password est insufusante : ${passwordValue}`);
    setError(password, "Password must be at least 8 character.");
  } else {
    setSuccess(password, "password est valid");
  }

  if (password2Value === "") {
    console.log(`password est insufusante : ${password2Value} `);
    setError(password2, "Password est viderr");
  } else if (password2Value.length < 8) {
    console.log(`password est insufusante : ${password2Value} `);
    setError(password2, "Password must be at least 8 character.");
  } else if(password2Value != passwordValue) {
    setError(password2, "please confirme your password");
  } else {
    setSuccess(password2, "password est valid");
  }
 
};




           







        