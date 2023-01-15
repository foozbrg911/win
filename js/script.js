var countDownDate = new Date("Jan 20, 2023 18:30:00").getTime();
var x = setInterval(function() {
    var counter = document.querySelector("#countdown");
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    counter.innerHTML = days + " يوم " + hours + " ساعة "
    + minutes + " دقيقة " + seconds + " ثانية ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        counter.innerHTML = "لقد وصلت متأخراً";
    }
}, 1000);

var winner = document.querySelector("#winner");
var loader = document.querySelector("#loaderwrap");
var myModal = new bootstrap.Modal(document.getElementById('modalWindow'), {
    keyboard : false
})

winner.addEventListener("click", function(){
    loader.style.display = "block";
    sim = setInterval(progressSim, 50)
});

