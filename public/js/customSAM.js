$(document).ready(function () {
    var counter = 15;
    var x = Math.floor((Math.random() * 2) + 1);
    $("#nature"+x).get(0).play();
    $("#submit").attr("disabled", "disabled");
    $("#submit").text("Next (" + counter + ")");
    var interval = setInterval(function () {
        counter--;
        if (counter == 0) {
            $("#submit").text("Next");
            clearInterval(interval);
        } else {
            $("#submit").text("Next (" + counter + ")");
        }
    }, 1000);
    setTimeout(function () {
        $("#nature"+x).get(0).pause();
        $("#submit").removeAttr("disabled");
    }, 15000);
});
