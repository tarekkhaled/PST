//your java script code here, this file is included in the footer.php file
let answers = document.querySelectorAll("#serial");
let score = 0;
let submitBtn = document.getElementById("submit");
let inputs = document.querySelectorAll('input');
let choice = 0;

// this listens to the submit button and checks if the selected radio  is the correct choice or no


submitBtn.addEventListener('click', (e) => {
    for (let i = 0; i < inputs.length; i++) { //loop over all the inputs
        if (inputs[i].type == "radio" && inputs[i].checked) { // select only the inputs that's type is equal to radio and if this radio is also checked or not by the user
            if (answers[choice].getAttribute('value') == inputs[i].getAttribute("class")) { //check whether the answer is equal what the user selected , if yes increment the score
                score++;

            }
            choice++;

        }
    }
    alert(`Your score is ${score} out of 20`);


})