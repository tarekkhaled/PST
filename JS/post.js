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

    //  AJAX REQUEST
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'includes/addscore.php?score=' + score, true);
    this.responseText
    xhr.onload = function () {
        if (this.status == 200) {
            window.location.href = "http://www.apec-eg.com";
        }
    }
    xhr.send();

})


let time = document.querySelector(".time");
let minutes = document.querySelector(".minutes");
let seconds = document.querySelector(".seconds");
let minHead = document.getElementById("min-head");
let secHead = document.getElementById("sec-head");

// timer

let countdown = 30 * 60 * 1000;
let timerId = setInterval(function () {
    countdown -= 1000;
    let min = Math.floor(countdown / (60 * 1000));
    //let sec = Math.floor(countdown - (min * 60 * 1000));  // wrong
    let sec = Math.floor((countdown - (min * 60 * 1000)) / 1000); //correct

    if (countdown <= 0) {
        alert("30 min!");
        clearInterval(timerId);
        //doSomething();
    } else {
        if (sec < 10) {
            if (min < 10) {
                minutes.textContent = "0" + min;
                seconds.textContent = "0" + sec;
                minHead.textContent = "0" + min;
                secHead.textContent = "0" + sec;
            } else {
                minutes.textContent = min;
                seconds.textContent = "0" + sec;
                minHead.textContent = min;
                secHead.textContent = "0" + sec;
            }
        } else if (min < 10) {
            if (sec < 10) {
                minutes.textContent = "0" + min;
                seconds.textContent = "0" + sec;
                minHead.textContent = "0" + min;
                secHead.textContent = "0" + sec;
            } else {
                minutes.textContent = "0" + min;
                seconds.textContent = sec;
                minHead.textContent = "0" + min;
                secHead.textContent = sec;
            }
        } else {
            minutes.textContent = min;
            seconds.textContent = sec;
            minHead.textContent = min;
            secHead.textContent = sec;
        }
    }

}, 1000); //1000ms. = 1sec.
let timer_div = document.getElementById("timer");
window.addEventListener('scroll', (e) => {
    let scrollPosition = window.scrollY;
    if (scrollPosition > 700) {
        timer_div.style.visibility = "visible";
    } else {
        timer_div.style.visibility = "hidden";
    }

});