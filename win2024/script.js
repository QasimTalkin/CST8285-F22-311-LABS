let quizArray  = [
    {
        question: "Whats the capital of Canad ?",
        answer: "Ottawa"
    }, 

    {
        question: "Whats color comes out of blue and red",
        answer: "Purple"
    }, 
    {
        question: "JS its not that bad?",
        answer: "Maybe"
    }
]


let quizBox = document.querySelector("#quizBlock")

quizArray.map((quizQuestion)=>{
    let h3Elm = document.createElement('h3')
    h3Elm.innerText = quizQuestion.question
    h3Elm.style.cssText = "color:red"

    let ansInput = document.createElement('input')
    ansInput.type = "text"

    let feedback = document.createElement('p')


    let answer = quizQuestion.answer.toLowerCase()
    ansInput.addEventListener("keyup", function checkAns() {
        userAns = event.target.value.toLowerCase()
        if (userAns == answer){
            feedback.innerText = "YOU GOT IT"
            feedback.style.color = "green"
        } else if (userAns.length < answer.length ) {
            feedback.innerText = "too short"
            feedback.style.color = "red"
        } else {
            feedback.innerText = "too Long"
            feedback.style.color = "red"
        }
        
    })

    quizBox.append(h3Elm, ansInput, feedback)
})
