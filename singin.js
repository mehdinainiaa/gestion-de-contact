const inscription = document.getElementById("inscription");
const username = document.getElementById("username");
const password = document.getElementById("password1");
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

  if (usernameValue === "") {
      console.log("username est unvalid");
    setError(username, "Username est vide");
  } 
 
   else if (usernameValue.length < 8) {
    console.log(`password est insufusante : ${usernameValue}`);
    setError(username, "Password must be at least 8 character.");
  }
  else {
    console.log(username.value);
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
 
};