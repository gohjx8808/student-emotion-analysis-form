$(document).ready(function () {
    var counter = 15;
    var x = Math.floor((Math.random() * 2) + 1);
    $("#nature"+x).get(0).play();
    var interval = setInterval(function () {
        counter--;
        if (counter == 0) {
            $("#countdownTimer").text(counter);
            clearInterval(interval);
        } else {
            $("#countdownTimer").text(counter);
        }
    }, 1000);
    setTimeout(function () {
        $("#nature"+x).get(0).pause();
        $("#randomQ").submit();
    }, 15000);
});
