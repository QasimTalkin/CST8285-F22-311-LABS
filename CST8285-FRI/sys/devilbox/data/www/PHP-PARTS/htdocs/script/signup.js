


























































// document.signUpForm.name.addEventListener('keyup', checkUserName);

// function createError(msg) {
//   var errorMsg = document.createElement('p');
//   errorMsg.textContent = msg;
//   errorMsg.style.color = 'red';
//   return errorMsg;
// }

// function checkUserName() {
//   var userName = document.signUpForm.name.value;
//   var errorMsg = document.createElement('p');
//   errorMsg.textContent = 'Username must be at least 1 characters long';
//   errorMsg.style.color = 'red';
//   errorMsg.classList.add('error');
//   if (userName.length === 0) {
//     document.signUpForm.name.after(errorMsg);
//   } else {
//     document.querySelector('.error')?.remove();
//   }
// }

// document.signUpForm.email.addEventListener('keyup', checkEmail);

// function checkEmail() {
//   var email = document.signUpForm.email.value;
//   var emailPattern  = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//   let check = emailPattern.test(email);
//   if (check === false && document.querySelector('.emailError') === null) {
//     emailError = createError('Email must be valid');
//     document.signUpForm.email.after(emailError);
//     emailError.classList.add('emailError');
//   } else if (check === true && document.querySelector('.emailError') !== null) {
//     document.querySelector('.emailError').remove();
//   }
// }
