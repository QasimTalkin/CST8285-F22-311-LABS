// function sayHello() {
//   alert('hello')
// }

// document.userForm.email.addEventListener('keyup',validateEmail);

// function validateEmail() {
//   var myEmailPattern = /[a-zA-z_.-0-9]+@[a-zA-Z].[a-zA-Z]{2,4}/
//   var emailValue = document.userForm.email.value;
//   var isEmailValid = myEmailPattern.test(emailValue)
//   console.log(isEmailValid)
//   if (!isEmailValid && document.querySelector('.errorClass') === null){
  
//    var errorElem = document.createElement('p')
//    errorElem.textContent = "FIX YO EMAIL DUDEEEE"
//    errorElem.style.color = 'red'
//    errorElem.classList.add('errorClass')
//    document.userForm.email.after(errorElem)
//   } else if(isEmailValid){
//     document.querySelector('.errorClass')?.remove();
//   }
// }

// document.userForm.name.addEventListener('keyup', checkUserName);

// function createError(msg) {
//   var errorMsg = document.createElement('p');
//   errorMsg.textContent = msg;
//   errorMsg.style.color = 'red';
//   return errorMsg;
// }

// function checkUserName() {
//   var userName = document.userForm.name.value;
//   var errorMsg = document.createElement('p');
//   errorMsg.textContent = 'Username must be at least 1 characters long';
//   errorMsg.style.color = 'red';
//   errorMsg.classList.add('error');
//   if (userName.length === 0) {
//     document.userForm.name.after(errorMsg);
//   } else {
//     document.querySelector('.error')?.remove();
//   }
// }

// document.userForm.email.addEventListener('keyup', checkEmail);

// function checkEmail() {
//   var email = document.userForm.email.value;
//   var emailPattern  = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//   let check = emailPattern.test(email);
//   if (check === false && document.querySelector('.emailError') === null) {
//     emailError = createError('Email must be valid');
//     document.userForm.email.after(emailError);
//     emailError.classList.add('emailError');
//   } else if (check === true && document.querySelector('.emailError') !== null) {
//     document.querySelector('.emailError').remove();
//   }
// }


// function sayHello() {
//   alert(document.userForm.name.value)

// }
// document.userForm.name.addEventListener('blur', validateName);

// function validateName() {
//   let userName = document.userForm.name.value;
//   var myEmailPattern = /[a-zA-z_.-0-9]+@[a-zA-Z].[a-zA-Z]{2,4}/
//   let checkEmail = myEmailPattern.test(userName)
//   if (!checkEmail){
//     alert('FIX IT MAN')
//   }
//   if(userName.length === 0 && document.querySelector('.emailError') === null){
//     var error = document.createElement('p')
//     error.textContent = 'Invalid Please FIXXXXX it'
//     error.style.color = 'red'
//     error.classList.add('emailError');
//     document.userForm.name.after(error)
//   } else if(userName.length > 0 ) {
//     document.querySelector('.emailError').remove()
//   }
// }

