// let inputZip = document.getElementById("inputZip")
// let inputEmail = document.getElementById("inputEmail")
// let inputPassword = document.getElementById("inputPassword")
// // inputZip.addEventListener('keyup', validateZip)
// // inputEmail.addEventListener('keyup', validateEmail)
// // inputPassword.addEventListener('keyup', validatePassword)


let regExCheck = {
    inputEmail:/^\S+@\S+\.\S+$/,
    inputZip: /^[a-z]\d[a-z][ -]?\d[a-z]\d$/i,
    inputPassword:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/,

}



Object.keys(regExCheck).forEach(key => {
    let item = document.getElementById(key)
    let currentRegEx = regExCheck[key]
    console.log(currentRegEx)
    item.addEventListener('keyup', (e,regExcheck) => validate(e, currentRegEx))
});

function validate(e, currentRegEx){
   let userValue = e.target.value;
   let isValid = currentRegEx.test(userValue)

   if (isValid){
    e.target.className="valid"
   } else {
    e.target.className="invalid"
   }
}

// function validatePassword()  {
//     let userPass  = this.value
//     let passRegEx = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/
//     console.log(passRegEx.test(userPass))
// }

// function validateEmail(){
//     let email = this.value;
//     let emailRegex = 
    
//     console.log(emailRegex.test(email))
// }

// function validateZip() {
//     let zipCode = event.target.value;

//     let zipCodeRegEx =

//     let isZipCode = zipCodeRegEx.test(zipCode)
//     console.log(isZipCode);
//     let error = document.getElementById("error")

//     if (isZipCode) {
//       error.style.display="none"
//     } else {
//         error.style.display="block"
//         error.style.color = "red"
//         error.innerText = "invlid Code"
//     }
// }






















// let quizArray  = [
//     {
//         question: "Whats the capital of Canad ?",
//         answer: "Ottawa"
//     }, 

//     {
//         question: "Whats color comes out of blue and red",
//         answer: "Purple"
//     }, 
//     {
//         question: "JS its not that bad?",
//         answer: "Maybe"
//     }
// ]


// let quizBox = document.querySelector("#quizBlock")

// quizArray.map((quizQuestion)=>{
//     let h3Elm = document.createElement('h3')
//     h3Elm.innerText = quizQuestion.question
//     h3Elm.style.cssText = "color:red"

//     let ansInput = document.createElement('input')
//     ansInput.type = "text"

//     let feedback = document.createElement('p')


//     let answer = quizQuestion.answer.toLowerCase()
//     ansInput.addEventListener("keyup", function checkAns() {
//         userAns = event.target.value.toLowerCase()
//         if (userAns == answer){
//             feedback.innerText = "YOU GOT IT"
//             feedback.style.color = "green"
//         } else if (userAns.length < answer.length ) {
//             feedback.innerText = "too short"
//             feedback.style.color = "red"
//         } else {
//             feedback.innerText = "too Long"
//             feedback.style.color = "red"
//         }
        
//     })

//     quizBox.append(h3Elm, ansInput, feedback)
// })



