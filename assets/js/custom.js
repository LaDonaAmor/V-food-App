// Declearing Variables
const days = document.getElementById("days");
const hours = document.getElementById("hours");
const minutes = document.getElementById("minutes");
const seconds = document.getElementById("seconds");
// Set Date counting down to
const countDownDate = new Date("AUG 5, 2020 15:37:25").getTime();
// Update the count down every 1 second
const time = setInterval(function () {
// Get today's date and time
const now = new Date().getTime();
// Find the distance between now and the count down date
const distance = countDownDate - now;
// Time calculations for days, hours, minutes and seconds
const day = Math.floor(distance / (1000 * 60 * 60 * 24));
const hour = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
const minute = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
const second = Math.floor((distance % (1000 * 60)) / 1000);
// OutPut Results
days.innerHTML = day;
hours.innerHTML = hour;
minutes.innerHTML = minute;
seconds.innerHTML = second;
// If the count down is over, write some text 
if (distance 
< 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    }
    }, 1000);
